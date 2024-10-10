<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolePageController extends Controller
{
    public function index()
    {
        $admin = '/role/admin';
        $expert = '/role/expert';
        $student = '/role/student';
        return "Выбери свою роль: <br/>"
            . "<p><a href={$admin}>Администратор</a></p>"
            . "<p><a href={$expert}>Эксперт</a></p>"
            . "<p><a href={$student}>Студент</a></p>";
    }
}
