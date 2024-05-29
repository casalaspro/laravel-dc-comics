<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// COMICS CRUD
// index
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// show
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// create
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// store
Route::get('/comics/store', [ComicController::class, 'store'])->name('comics.store');