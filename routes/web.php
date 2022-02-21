<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SpinOffsController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\StatusLikesController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

/* Rutas de navegación principal */

Route::get('/book', [BookController::class, 'index'])->name('book');

/* Rutas de navegación secciones */

Route::get('/book/spin-offs', [SpinOffsController::class, 'index'])->name('spin-offs');
Route::get('/book/spin-offs/{id}', [SpinOffsController::class, 'show'])->name('spin-offs.show');


/* Rutas de los Estados */

Route::get('statuses', [StatusesController::class, 'index'])->name('statuses.index');
Route::get('statuses/{status}', [StatusesController::class, 'show'])->name('statuses.show');
Route::post('statuses', [StatusesController::class, 'store'])->name('statuses.store')->middleware('auth');

/* Likes */

Route::post('statuses/{status}/like', [StatusLikesController::class, 'store'])->name('statuses.likes.store')->middleware('auth');
Route::delete('statuses/{status}/like', [StatusLikesController::class, 'destroy'])->name('statuses.likes.destroy')->middleware('auth');