<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('backend.layouts.main');
    }

    public function createPalette(){
        return view('backend.forms.createPalette');
    }
}
