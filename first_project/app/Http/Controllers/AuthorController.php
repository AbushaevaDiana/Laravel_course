<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::find(1);
        dump($author->name);
        dump($author->surname);
        dump($author->patronymic);
        dump($author->country);
        dd($author->photo);
    }

    public function firstOrCreate(){
        $name = 'Тамара';
        $surname = 'Рыльская';
        $patronymic = null;
        $author = Author::firstOrCreate(
            [
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic
            ],
            [
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic,
                'photo' => null,
                'country' => null
            ]
        );
        dd($author->name);
    }

    public function updateOrCreate(){
        $name = 'Тамара';
        $surname = 'Рыльская';
        $patronymic = null;
        $photo = 'newphoto.jpg';

        $author = Author::updateOrCreate(
            [
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic
            ],
            [
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic,
                'photo' => $photo,
                'country' => null
            ]
        );
        dd($author->photo);
    }
}
