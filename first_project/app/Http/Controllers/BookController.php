<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::find(1);
        dump($book->title);
        dump($book->image);
        dump($book->description);
        dump($book->comment);
        dump($book->mark);
        dump($book->is_audiobook);
        dump($book->is_printed_book);
        dump($book->is_ebook);
        dump($book->is_litres_book);
        dump($book->is_bought_audiobook);
        dump($book->is_bought_printed_book);
        dump($book->is_bought_ebook);
        dump($book->cycles_id);
        dd($book->series_id);
    }
}
