<?php

use App\Http\Controllers\RoleAdminPageController;
use App\Http\Controllers\RoleExpertPageController;
use App\Http\Controllers\RolePageController;
use App\Http\Controllers\RoleStudentPageController;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\MyPageAgeController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\MyPageNameController;
use App\Http\Controllers\MyPageYoutubeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page', [MyPageController::class, 'index']);
//д/з(2): создать еще 8 маршрутизаторов
//д/з(3): сщздать еще 8 контроллеров
Route::get('/my_page/age', [MyPageAgeController::class, 'index']);
Route::get('/my_page/name', [MyPageNameController::class, 'index']);
Route::get('/my_page/youtube', [MyPageYoutubeController::class, 'index']);

Route::redirect('/welcome', '/welcome/newcomer');
Route::get('/welcome/{name}', [WelcomePageController::class, 'index']);

Route::get('/role', [RolePageController::class, 'index']);
Route::get('/role/admin', [RoleAdminPageController::class, 'index']);
Route::get('/role/expert', [RoleExpertPageController::class, 'index']);
Route::get('/role/student', [RoleStudentPageController::class, 'index']);
