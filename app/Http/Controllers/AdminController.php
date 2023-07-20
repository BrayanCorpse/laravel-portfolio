<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaletteRequest;
use App\Http\Requests\ShadeRequest;
use App\Models\Palette;
use App\Models\Shade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $types = ['horizontal','vertical','circular'];

    public function index(){
        return view('backend.layouts.main');
    }

    public function createPalette(){

        return view('backend.forms.createPalette', ['palette' => new Palette, 'types' => $this->types]);
    }

    public function storePalette(PaletteRequest $request){

        if ($request->hasFile('url')) {

            $palette = new Palette;
            $palette->name = $request->name;

            $image = $request->file('url');
            $path = $image->store('coverImages', 's3');

            $palette->url = $path;
            $palette->type = $request->type;
            $palette->save();

            return to_route('createShade')->with('status', '¡New Palette '. $palette->name.  ' successfully created, continue editing');
        }
        
    }

    public function showPalette(Palette $palette){

        $palettes =  $palette::select('id', 'name', 'slug', 'url', 'type', 'deleted_at')
                        ->withTrashed()
                        ->paginate(2);

        return view('backend.showPalette', compact('palettes'));
    }

    public function editPalette(Palette $palette){

        return view('backend.forms.editPalette', ['palette' => $palette, 'types' => $this->types]);

    }

    public function updatePalette(PaletteRequest $request, $palette){

        $palette = Palette::findOrFail($palette);

        if ($request->hasFile('url')) {

            $existingImagePath = $palette->url;
            Storage::disk('s3')->delete($existingImagePath);

            $image = $request->file('url');
            $newUrlPath = $image->store('coverImages', 's3');

            $palette->name = $request->name;
            $palette->url = $newUrlPath;
            $palette->type = $request->type;
            $palette->save();

            $palette->generateSlug();

            return to_route('showPalette')->with('status', '¡Palette '. $palette->name.  ' successfully Updated!');

        }

            $palette->name = $request->name;
            $palette->type = $request->type;
            $palette->save();

            return to_route('showPalette')->with('status', '¡Palette '. $palette->name.  ' successfully Updated!');

    }

     public function softdeletePalette($palette){

        $palette = Palette::findOrFail($palette);
        $palette->delete();

        return redirect()->back()->with('status', '¡Palette '. $palette->name.  ' successfully Deleted!');

    }

    public function restorePalette($palette){

        $palette = Palette::withTrashed()->findOrFail($palette);
        $palette->restore();
 
        return redirect()->back()->with('status', '¡Palette '. $palette->name.  ' successfully Restored!');

    }

    public function destroyPalette($palette){

        $palette = Palette::withTrashed()->findOrFail($palette);

        $existingImagePath = $palette->url;
        Storage::disk('s3')->delete($existingImagePath);

        $palette->forceDelete();

        return redirect()->back()->with('status', '¡Palette '. $palette->name.  ' successfully Destroying!');
        
    }


    public function createShade(){

        $palettes = Palette::select('id', 'name')->get();

        return view('backend.forms.createShade', ['shade' => new Shade, 'palettes' => $palettes]);
    }

    public function storeShade(ShadeRequest $request){
        
        $shade = new Shade;
        $shade->title       = $request->title;
        $shade->color1      = $request->color1;
        $shade->color2      = $request->color2;
        $shade->color3      = $request->color3;
        $shade->color4      = $request->color4;
        $shade->palette_id  = $request->palette_id;
        $shade->save();

        return redirect()->back()->with('status', '¡New Shade '. $shade->title. ' created successfully');
    }

    public function showShade(){

        $shades = DB::table('shades')
                    ->join('palettes', 'palettes.id', '=', 'shades.palette_id')
                    ->select('shades.id', 'shades.title', 'shades.color1', 'shades.color2','shades.color3', 'shades.color4', 'palettes.name', 'shades.deleted_at')
                    ->paginate(4);
                            
        return view('backend.showShade', compact('shades'));
    }

    public function editShade(Shade $shade){

        $palettes = Palette::select('id', 'name')->get();

        return view('backend.forms.editShade', ['shade' => $shade, 'palettes' => $palettes]);

    }

    public function updateShade(ShadeRequest $request, $shade){

        $shade = Shade::findOrFail($shade);
        $shade->fill($request->all());
        $shade->save();

        return to_route('showShade')->with('status', 'Shade '. $shade->title.  ' successfully Updated!');
    }

    public function softdeleteShade($shade){

        $shade = Shade::findOrFail($shade);
        $shade->delete();

        return redirect()->back()->with('status', 'Shade '. $shade->title.  ' successfully Deleted!');

    }

    public function restoreShade($shade){

        $shade = Shade::withTrashed()->findOrFail($shade);
        $shade->restore();

        return redirect()->back()->with('status', 'Shade '. $shade->title.  ' successfully Restored!');
    }

    public function destroyShade($shade){

        $shade = Shade::withTrashed()->findOrFail($shade);
        $shade->forceDelete();

        return redirect()->back()->with('status', 'Shade '. $shade->title.  ' successfully Destroying!');
    }
}
