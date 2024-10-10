<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookAuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookGenreController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/my_page');

Route::get('/my_page', [MyPageController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/hobbies', [HobbyController::class, 'index']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/cycles', [CycleController::class, 'index']);
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/book_author', [BookAuthorController::class, 'index']);
Route::get('/book_genre', [BookGenreController::class, 'index']);
