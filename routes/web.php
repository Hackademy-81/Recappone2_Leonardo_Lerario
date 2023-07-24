<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PublicController::class, 'home'])->name('welcome');
Route::get('/create/album', [AlbumController::class, 'create'])->name('album.create');
Route::get('/album/index', [AlbumController::class, 'index'])->name('album.index');
Route::get('/album/show/{album}', [AlbumController::class, 'show'])->name('album.show');
Route::get('/edit/album/{album}', [AlbumController::class, 'edit'])->name('album.edit');
Route::delete('/delete/album/{album}', [AlbumController::class, 'destroy'])->name('album.delete');