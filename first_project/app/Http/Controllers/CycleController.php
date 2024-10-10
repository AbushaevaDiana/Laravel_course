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

    public function firstOrCreate(){
        $name = 'Колдун Российской империи';
        $description = 'Расследование Графа Аверина. Прошлое название цикла - Они не люди';

        $cycle = Cycle::firstOrCreate(
            [
                'name'=>$name
            ],
            [
                'name'=>$name,
                'description'=>$description
            ]);
    }

    public function updateOrCreate(){
        $name = 'Колдун Российской империи';
        $description = 'Расследование Графа Аверина. Прошлое название цикла - Они не люди';

        $cycle = Cycle::updateOrCreate(
            [
                'name'=>$name
            ],
            [
                'name'=>$name,
                'description'=>$description
            ]);
    }
}
