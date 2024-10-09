<?php

namespace App\Http\Controllers;


use App\Models\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    public function index()
    {
        $bookAuthor = BookAuthor::find(1);
        dump($bookAuthor->author_id);
        dd($bookAuthor->book_id);
    }
}
