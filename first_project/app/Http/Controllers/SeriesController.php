<?php

namespace App\Http\Controllers;


use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::find(1);
        dump($series->name);
        dd($series->description);
    }
}
