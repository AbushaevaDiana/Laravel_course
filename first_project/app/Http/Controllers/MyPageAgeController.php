<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageAgeController extends Controller
{
    public function index()
    {
        $year_birth = 2002;
        $age = date('Y') - $year_birth;
        return "I was born in {$year_birth}. Now I am {$age} years ago";
    }
}
