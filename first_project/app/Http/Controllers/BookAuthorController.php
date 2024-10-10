<?php

namespace App\Http\Controllers;


use App\Models\Author;
use App\Models\Book;
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

    public function create()
    {
        $authorValue = [
            'name' => 'Лев',
            'surname' => 'Брусилов',
            'patronymic' => null
        ];

        $author = Author::firstOrCreate($authorValue, $authorValue);

        $bookValue = [
            'title' => 'Кроваво-красные бисквиты',
            'description' => 'Автор - Лев Брусилов',
            'mark' => false,
            'is_audiobook' => false,
            'is_printed_book' => false,
            'is_ebook' => true,
            'is_litres_book' => true,
            'is_bought_audiobook' => false,
            'is_bought_printed_book' => false,
            'is_bought_ebook' => false,
        ];

        $book = Book::updateOrCreate(['title' => 'Кроваво-красные бисквиты',], $bookValue);

        $value = [
            'author_id' => $author->id,
            'book_id' => $book->id,
        ];

        $bookAuthor = BookAuthor::firstOrCreate($value, $value);

        dump($bookAuthor->author_id);
        dump($book->description);
        dd($bookAuthor->book_id);
    }
}
