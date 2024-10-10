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

    public function create()
    {
        $name = 'Они не люди';
        $description = 'Расследование Графа Аверина. Название цикла на автор.тудей - Они не люди';

        $value = [
            'name' => $name,
            'description' => $description
        ];

        $cycle = Cycle::firstOrCreate(['description' => $description], $value);

        dump($cycle->name);
        dd($cycle->description);
    }

    public function update()
    {
        $name = 'Колдун Российской империи';
        $description = 'Расследование Графа Аверина. Название цикла на автор.тудей - Они не люди';

        $value = [
            'name' => $name,
            'description' => $description
        ];

        $cycle = Cycle::updateOrCreate(['description' => $description], $value);

        dump($cycle->name);
        dd($cycle->description);
    }
}
