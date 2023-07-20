<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shade;
use App\Models\Palette;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PaletteController extends Controller
{
    public function index(){
        $palettes = Palette::select('id', 'name', 'slug', 'url')
                            ->orderBy('created_at', 'desc')
                            ->get();
                 
        return view('pages.palettes',compact('palettes'));
    }

    public function showPalettes($paname){

        $shades = DB::table('shades')
                    ->join('palettes', 'palettes.id', '=', 'shades.palette_id')
                    ->select('shades.title','shades.color1','shades.color2','shades.color3','shades.color4','shades.palette_id', 'palettes.type', 'palettes.name')
                    ->where('palettes.slug', $paname)
                    ->get();
        
        $palette = DB::table('palettes')
                    ->where('palettes.id',$shades[0]->palette_id)
                    ->select('palettes.name')
                    ->get();

        $paletteName = str_split($palette[0]->name);

        $colors = Str::of('#9A8793,#53937F,#DEA25A,#D2DEE6,#6969A7,#C5AFAB,#6EA7B1,#F5D9D6')->split('/[\s,]+/');

        return view('pages.colorPalette', compact('shades','paletteName','colors'));

    }
}
