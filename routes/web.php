<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaletteController;
use App\Http\Controllers\AdminController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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
})->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/bmcpanel', [AdminController::class, 'index'])->name('bmcpanel');

    Route::get('/showPalette', [AdminController::class, 'showPalette'])->name('showPalette');
    Route::get('/createPalette', [AdminController::class, 'createPalette'])->name('createPalette');
    Route::post('/storePalette', [AdminController::class, 'storePalette'])->name('storePalette');
    Route::get('/editPalette/{palette}', [AdminController::class, 'editPalette'])->name('editPalette');
    Route::patch('/updatePalette/{palette}', [AdminController::class, 'updatePalette'])->name('updatePalette');
    Route::get('/softdeletePalette/{palette}', [AdminController::class, 'softdeletePalette'])->name('softdeletePalette');
    Route::get('/restorePalette/{palette}', [AdminController::class, 'restorePalette'])->name('restorePalette');
    Route::get('/destroyPalette/{palette}', [AdminController::class, 'destroyPalette'])->name('destroyPalette');

    Route::get('/showShade', [AdminController::class, 'showShade'])->name('showShade');
    Route::get('/createShade', [AdminController::class, 'createShade'])->name('createShade');
    Route::post('/storeShade', [AdminController::class, 'storeShade'])->name('storeShade');
    Route::get('/editShade/{shade}', [AdminController::class, 'editShade'])->name('editShade');
    Route::patch('/updateShade/{shade}', [AdminController::class, 'updateShade'])->name('updateShade');
    Route::get('/softdeleteShade/{shade}', [AdminController::class, 'softdeleteShade'])->name('softdeleteShade');
    Route::get('/restoreShade/{shade}', [AdminController::class, 'restoreShade'])->name('restoreShade');
    Route::get('/destroyShade/{shade}', [AdminController::class, 'destroyShade'])->name('destroyShade');


});

Route::get('/palettes', [PaletteController::class, 'index'])->name('palettes');
Route::get('/palettes/{paname}', [PaletteController::class, 'showPalettes'])->name('showPalettes');


Route::post('/like', [LikeController::class, 'like'])->name('like');

Route::post('/sendMail', [ContactController::class, 'sendMail'])->name('sendMail');

