<?php

namespace App\Http\Controllers;


use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    public function index()
    {
        $cycle = Cycle::find(1);
        dump($cycle->name);
        dd($cycle->description);
    }
}
