<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaletteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/color-palette', [PaletteController::class, 'showPalettes'])->name('color-palette');

Route::post('/like', [LikeController::class, 'like'])->name('like');

Route::post('/sendMail', [ContactController::class, 'sendMail'])->name('sendMail');

