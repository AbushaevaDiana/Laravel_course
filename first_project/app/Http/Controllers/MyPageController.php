<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index()
    {
        $year_birth = 2002;
        $age = date('Y') - $year_birth;
        $ageStr = "I was born in {$year_birth}. Now I am {$age} years ago";

        $name = 'Привет, моё имя Диана';

        $youtubeUrl = '<iframe width="560" height="315" src="https://www.youtube.com/embed/WFciEoaPd64?si=TYUdhGd0vG8h2QHC"'
        . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;'
        . 'gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';

        return nl2br($name . PHP_EOL . $ageStr . PHP_EOL . $youtubeUrl);

    }
}
