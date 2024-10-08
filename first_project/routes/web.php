<?php

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
    return 'Hello, world!';
});

Route::get('/my_page', function () {
    return 'This is my page';
});
//д/з: создать еще 8 маршрутизаторов
Route::get('/my_page/age', function () {
    $year_birth = 2002;
    $age = date('Y') - $year_birth;
    return "I was born in {$year_birth}. Now I am {$age} years ago";
});
Route::get('/my_page/name', function () {
    return 'Привет, моё имя Диана';
});
Route::get('/my_page/youtube', function () {
    return '<iframe width="560" height="315" src="https://www.youtube.com/embed/WFciEoaPd64?si=TYUdhGd0vG8h2QHC"'
        . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;'
        . 'gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
});
Route::redirect('/welcome', '/welcome/newcomer');
Route::get('/welcome/{name}', function ($name) {
    if ($name == 'newcomer') {
        return "Добро пожаловать, незнакомец! <br/> Представься - введи в адрес свое имя";
    }
    return "Привет, {$name}";
});
Route::get('/role', function () {
    $admin = '/role/admin';
    $expert = '/role/expert';
    $student = '/role/student';
    return "Выбери свою роль: <br/>"
        . "<p><a href={$admin}>Администратор</a></p>"
        . "<p><a href={$expert}>Эксперт</a></p>"
        . "<p><a href={$student}>Студент</a></p>";
});
Route::get('/role/admin', function () {
    return 'Hi!';
});
Route::get('/role/expert', function () {
    $url = 'https://expert-edu.ru/';
    return "Добрый день! Со всей необходимой информацией Вы можете ознакомиться на сайте Гильдии экспертов"
        . "<br/>ссылка: <a href={$url}>{$url}</a>";
});
Route::get('/role/student', function () {
    $url = 'https://best-edu.ru/ratings/global/globalnyj-agregirovannyj-rejting';
    return "Привет! Ознакомься с глобальным рейтингом вузов:"
        . "<br/>ссылка: <a href={$url}>{$url}</a>";
});
