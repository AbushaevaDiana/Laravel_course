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

    public function create()
    {
        $value = [
            'name' => 'INSPIRIA',
        ];

        $hobby = Series::firstOrCreate(['name' => 'INSPIRIA'], $value);
        dd($hobby->description);
    }

    public function update()
    {
        $value = [
            'name' => 'INSPIRIA',
            'description' => 'Inspira audio',
        ];

        $hobby = Series::updateOrCreate(['name' => 'INSPIRIA'], $value);
        dd($hobby->description);
    }
}
