<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookAuthor;
use App\Models\BookGenre;
use App\Models\Cycle;
use App\Models\Genre;
use App\Models\Series;
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

    public function create()
    {
        $value = [
            'title' => 'Кроваво-красные бисквиты',
            'image' => null,
            'description' => null,
            'comment' => null,
            'mark' => 6,
            'is_audiobook' => true,
            'is_printed_book' => true,
            'is_ebook' => true,
            'is_litres_book' => true,
            'is_bought_audiobook' => true,
            'is_bought_printed_book' => false,
            'is_bought_ebook' => false
        ];

        $book = Book::firstOrCreate([
            'title' => 'Кроваво-красные бисквиты',
        ], $value);

        dump($book->id);
        dump($book->title);
        dd($book->mark);
    }

    public function addCycle()
    {
        $cycle = Cycle::firstOrCreate(['name' => 'Губернский детектив. Расследования барона фон Шпинне'],
            ['name' => 'Губернский детектив. Расследования барона фон Шпинне']);

        $bookValue = [
            'title' => 'Кроваво-красные бисквиты',
            'image' => null,
            'description' => null,
            'comment' => null,
            'mark' => false,
            'is_audiobook' => false,
            'is_printed_book' => false,
            'is_ebook' => true,
            'is_litres_book' => true,
            'is_bought_audiobook' => false,
            'is_bought_printed_book' => false,
            'is_bought_ebook' => false,
            'cycles_id' => $cycle->id
        ];

        $book = Book::updateOrCreate([
            'title' => 'Кроваво-красные бисквиты',
        ], $bookValue);

        dump($book->id);
        dump($book->title);
        dd($book->cycles_id);
    }

    public function addSeries()
    {
        $series = Series::firstOrCreate(['name' => 'INSPIRIA'], ['name' => 'INSPIRIA']);

        $bookValue = [
            'title' => 'Кроваво-красные бисквиты',
            'image' => null,
            'description' => null,
            'comment' => null,
            'mark' => false,
            'is_audiobook' => false,
            'is_printed_book' => false,
            'is_ebook' => true,
            'is_litres_book' => true,
            'is_bought_audiobook' => false,
            'is_bought_printed_book' => false,
            'is_bought_ebook' => false,
            'series_id' => $series->id
        ];

        $book = Book::updateOrCreate([
            'title' => 'Кроваво-красные бисквиты',
        ], $bookValue);

        dump($book->id);
        dump($book->title);
        dd($book->series_id);
    }

    public function updateMark()
    {
        $cycle = Cycle::firstOrCreate(['name' => 'Губернский детектив. Расследования барона фон Шпинне'],
            ['name' => 'Губернский детектив. Расследования барона фон Шпинне']);

        $series = Series::firstOrCreate(['name' => 'INSPIRIA'], ['name' => 'INSPIRIA']);

        $value = [
            'title' => 'Кроваво-красные бисквиты',
            'image' => null,
            'description' => null,
            'comment' => null,
            'mark' => 8,
            'is_audiobook' => true,
            'is_printed_book' => true,
            'is_ebook' => true,
            'is_litres_book' => true,
            'is_bought_audiobook' => true,
            'is_bought_printed_book' => false,
            'is_bought_ebook' => false,
            'cycles_id' => $cycle->id,
            'series_id' => $series->id
        ];

        $book = Book::firstOrCreate([
            'title' => 'Кроваво-красные бисквиты',
            'cycles_id' => $cycle->id,
            'series_id' => $series->id
        ], $value);

        dump($book->id);
        dump($book->title);
        dd($book->mark);
    }

    public function addBookAuthor()
    {
        $book = $this->firstOrCreate();

        $authorValue = [
            'name' => 'Лев',
            'surname' => 'Брусилов',
            'patronymic' => null
        ];

        $author = Author::firstOrCreate($authorValue, $authorValue);

        $bookAuthor = BookAuthor::firstOrCreate(['book_id' => $book->id, 'author_id' => $author->id],
            ['book_id' => $book->id, 'author_id' => $author->id]);

        dump($book->title);
        dump($author->surname);
        dd($bookAuthor->id);
    }

    public function addBookGenre()
    {
        $book = $this->firstOrCreate();

        $genreValue = [
            'name' => 'Детектив',
        ];

        $genre = Genre::firstOrCreate($genreValue, $genreValue);

        $bookGenre = BookGenre::firstOrCreate(['book_id' => $book->id, 'genre_id' => $genre->id],
            ['book_id' => $book->id, 'genre_id' => $genre->id]);

        dump($book->title);
        dump($genre->name);
        dd($bookGenre->id);
    }

    private function firstOrCreate(): Book
    {
        $cycle = Cycle::firstOrCreate(['name' => 'Губернский детектив. Расследования барона фон Шпинне'],
            ['name' => 'Губернский детектив. Расследования барона фон Шпинне']);

        $series = Series::firstOrCreate(['name' => 'INSPIRIA'], ['name' => 'INSPIRIA']);

        $value = [
            'title' => 'Кроваво-красные бисквиты',
            'image' => null,
            'description' => null,
            'comment' => null,
            'mark' => false,
            'is_audiobook' => false,
            'is_printed_book' => false,
            'is_ebook' => true,
            'is_litres_book' => true,
            'is_bought_audiobook' => false,
            'is_bought_printed_book' => false,
            'is_bought_ebook' => false,
            'cycles_id' => $cycle->id,
            'series_id' => $series->id
        ];

        return Book::firstOrCreate([
            'title' => 'Кроваво-красные бисквиты',
            'cycles_id' => $cycle->id,
            'series_id' => $series->id
        ], $value);
    }

}
