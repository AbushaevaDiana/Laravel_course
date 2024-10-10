<?php

namespace App\Http\Controllers;


use App\Models\BookGenre;
use Illuminate\Http\Request;

class BookGenreController extends Controller
{
    public function index()
    {
        $bookGenre = BookGenre::find(1);
        dump($bookGenre->genre_id);
        dd($bookGenre->book_id);
    }
}
