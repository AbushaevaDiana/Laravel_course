<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobby = Hobby::find(1);
        dump($hobby->name);
        dump($hobby->description);
        dd($hobby->image);
    }

    public function create()
    {
        $value = [
            'name' => 'Программирование',
            'description' => 'Программи́рование — процесс создания и модификации компьютерных программ.',
        ];

        $hobby = Hobby::firstOrCreate(['name' => 'Программирование'], $value);
        dd($hobby->description);
    }

    public function update()
    {
        $value = [
            'name' => 'Программирование',
            'description' => 'Программирование — это написание алгоритмов для управления работой '
                . 'компьютера. Суть в том, что машина не понимает команды, написанные простыми '
                . 'словами. Чтобы управлять компьютерной техникой, требуется писать алгоритмы'
                . ' по особым правилам синтаксиса.',
        ];

        $hobby = Hobby::updateOrCreate(['name' => 'Программирование'], $value);
        dd($hobby->description);
    }
}
