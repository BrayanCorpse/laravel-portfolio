<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaletteController;
use App\Http\Controllers\AdminController;

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

Route::prefix('admin')->group(function () {
    Route::get('/bmcpanel', [AdminController::class, 'index'])->name('bmcpanel');
    Route::get('/createPalette', [AdminController::class, 'createPalette'])->name('createPalette');
});

Route::get('/palettes', [PaletteController::class, 'index'])->name('palettes');
Route::get('/color-palette/{paname}', [PaletteController::class, 'showPalettes'])->name('showPalettes');


Route::post('/like', [LikeController::class, 'like'])->name('like');

Route::post('/sendMail', [ContactController::class, 'sendMail'])->name('sendMail');

