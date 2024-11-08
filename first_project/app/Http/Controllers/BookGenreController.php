<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\BookGenre;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookGenreController extends Controller
{
    public function index()
    {
        $bookGenre = BookGenre::find(1);
        dump($bookGenre->genre_id);
        dd($bookGenre->book_id);
    }

    public function create()
    {
        $genreValue = [
            'name' => 'Детектив',
        ];

        $genre = Genre::firstOrCreate($genreValue, $genreValue);

        $bookValue = [
            'title' => 'Кроваво-красные бисквиты',
            'description' => 'Жанр - детектив',
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
            'genre_id' => $genre->id,
            'book_id' => $book->id,
        ];

        $bookGenre = BookGenre::firstOrCreate($value, $value);
        dump($bookGenre->genre_id);
        dump($book->description);
        dd($bookGenre->book_id);
    }
}
