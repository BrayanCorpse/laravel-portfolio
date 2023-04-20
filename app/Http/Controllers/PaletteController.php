<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Palette;
use Illuminate\Support\Str;

class PaletteController extends Controller
{
    public function showPalettes(){
        $palettes = Palette::all();

        return view('pages.colorPalette', compact('palettes'));
    }
}
