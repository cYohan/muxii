<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\SpinOffsController;
use App\Http\Controllers\ComicsController;

use App\Http\Controllers\StatusesController;
use App\Http\Controllers\StatusLikesController;

use App\Http\Controllers\StatusCommentsController;
use App\Http\Controllers\CommentLikesController;

use App\Http\Controllers\UsersController;

use App\Http\Controllers\UploadController;

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

Route::get('/book/games', [GamesController::class, 'index'])->name('games');
Route::get('/book/games/{id}', [GamesController::class, 'show'])->name('games.show');

Route::get('/book/comics', [ComicsController::class, 'index'])->name('comics');
Route::get('/book/comics/create', [ComicsController::class, 'create'])->name('comics.create');
Route::get('/book/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');

Route::post('/book/comics/create', [ComicsController::class, 'store'])->name('comic.store');

//Route::post('/comic/store', [ComicsController::class, 'storeAsComics']);

/* Status */

Route::get('statuses', [StatusesController::class, 'index'])->name('statuses.index');
Route::get('statuses/{status}', [StatusesController::class, 'show'])->name('statuses.show');
Route::post('statuses', [StatusesController::class, 'store'])->name('statuses.store')->middleware('auth');

/* Likes Status */

Route::post('statuses/{status}/like', [StatusLikesController::class, 'store'])->name('statuses.likes.store')->middleware('auth');
Route::delete('statuses/{status}/like', [StatusLikesController::class, 'destroy'])->name('statuses.likes.destroy')->middleware('auth');

/* Comments */

Route::post('statuses/{status}/comment', [StatusCommentsController::class, 'store'])->name('statuses.comments.store')->middleware('auth');

/* Likes Comments */

Route::post('comments/{comment}/likes', [CommentLikesController::class, 'store'])->name('comments.likes.store')->middleware('auth');
Route::delete('comments/{comment}/likes', [CommentLikesController::class, 'destroy'])->name('comments.likes.destroy')->middleware('auth');

/* Uploads */

Route::post('upload', [UploadController::class, 'store']);

/* Users */

Route::get('@{user}', [UsersController::class, 'show'])->name('users.show');