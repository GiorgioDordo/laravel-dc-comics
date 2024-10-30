<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MangaController;
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

Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/mangas', [MangaController::class, 'index'])->name('mangas');
Route::post('/mangas', [MangaController::class, 'store'])->name('manga.store');
Route::get('/mangas/create', [MangaController::class, 'create'])->name('mangas.create');
Route::get('/mangas/{id}', [MangaController::class, 'show'])->name('manga.show');
Route::get('/manga/{id}/edit', [MangaController::class, 'edit'])->name('manga.edit');
Route::put('/manga/{id}', [MangaController::class, 'update'])->name('manga.update');
Route::delete('/manga/{id}', [MangaController::class, 'destroy'])->name('manga.delete');
