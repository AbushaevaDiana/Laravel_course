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
}
