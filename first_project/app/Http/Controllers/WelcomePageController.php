<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    public function index($name)
    {
        if ($name == 'newcomer') {
            return "Добро пожаловать, незнакомец! <br/> Представься - введи в адрес свое имя";
        }
        return "Привет, {$name}";
    }
}
