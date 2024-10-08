<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleStudentPageController extends Controller
{
    public function index()
    {
        $url = 'https://best-edu.ru/ratings/global/globalnyj-agregirovannyj-rejting';
        return "Привет! Ознакомься с глобальным рейтингом вузов:"
            . "<br/>ссылка: <a href={$url}>{$url}</a>";
    }
}
