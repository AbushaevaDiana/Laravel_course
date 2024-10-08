<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleExpertPageController extends Controller
{
    public function index()
    {
        $url = 'https://expert-edu.ru/';
        return "Добрый день! Со всей необходимой информацией Вы можете ознакомиться на сайте Гильдии экспертов"
            . "<br/>ссылка: <a href={$url}>{$url}</a>";
    }
}
