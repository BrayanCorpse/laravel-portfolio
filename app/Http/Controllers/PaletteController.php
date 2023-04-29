<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodeColor;
use App\Models\Shade;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class PaletteController extends Controller
{
    public function index(){
        return view('pages.palettes');
    }

    public function showPalettes(){

        $codeColors = DB::table('code_colors')
                    ->join('shades', 'shades.id', '=', 'code_colors.shade_id')
                    ->select('code_colors.id','code_colors.color1','code_colors.color2',
                    'code_colors.color3','code_colors.color4','shades.palette_id','shades.title')
                    ->get();
        
        $palette = DB::table('palettes')
                    ->where('palettes.id',$codeColors[0]->palette_id)
                    ->select('palettes.name')
                    ->get();

        $paletteName = str_split($palette[0]->name);

        $colors = Str::of('#9A8793, #53937F, #DEA25A, #D2DEE6, #6969A7, #C3ACA8')->split('/[\s,]+/');

        return view('pages.colorPalette', compact('codeColors','paletteName','colors'));

    }
}
