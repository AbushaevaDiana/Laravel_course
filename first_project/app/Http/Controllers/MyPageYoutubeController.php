<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageYoutubeController extends Controller
{
    public function index()
    {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/WFciEoaPd64?si=TYUdhGd0vG8h2QHC"'
            . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;'
            . 'gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
    }
}
