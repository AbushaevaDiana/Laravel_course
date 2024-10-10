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
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/hobbies', [HobbyController::class, 'index']);
Route::get('/hobbies/create', [HobbyController::class, 'create']);
Route::get('/hobbies/update', [HobbyController::class, 'update']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/first_or_create', [AuthorController::class, 'firstOrCreate']);
Route::get('/authors/update_or_create', [AuthorController::class, 'updateOrCreate']);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/create', [GenreController::class, 'create']);
Route::get('/genres/update', [GenreController::class, 'update']);

Route::get('/cycles', [CycleController::class, 'index']);
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);

Route::get('/book_author', [BookAuthorController::class, 'index']);
Route::get('/book_author/first_or_create', [BookAuthorController::class, 'firstOrCreate']);

Route::get('/book_genre', [BookGenreController::class, 'index']);
Route::get('/book_genre/create', [BookGenreController::class, 'create']);
