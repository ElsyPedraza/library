<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Homepage
Route::get('/', function () {
    return view('pages.home'); // Ora punta a resources/views/pages/home.blade.php
});

// Lista libri
Route::get('/books', function () {
    $books = DB::table('books')->get();
    return view('pages.books.index', ['books' => $books]); 
});

Route::get('/books/{id}', function ($id) {
    $book = DB::table('books')->where('id', $id)->first();

    if (!$book) {
        abort(404);
    }

    return view('pages.books.show', ['book' => $book]); 
})->where('id', '[0-9]+');

Route::get('loans', function () {{
    $loans = DB::table('loans')
        ->join('books', 'loans.book_id', '=', 'books.id')
        ->select('loans.*', 'books.title as book_title')
        ->get();
    return view('pages.loans.index', ['loans' => $loans]);
}});
