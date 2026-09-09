<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author; 

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $books = Book::all();

    return view('books.index', compact('books'));

    return view('books.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();

    return view('books.create', compact('authors'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'genre' => 'required',
        'situation' => 'required',
        'description' => 'required',
        'author_id' => 'required',
    ]);

    Book::create([
        'title' => $request->title,
        'genre' => $request->genre,
        'situation' => $request->situation,
        'description' => $request->description,
        'author_id' => $request->author_id,
    ]);

    return redirect()->route('books.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
       return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
{
    $authors = Author::all();

    return view('books.edit', compact('book', 'authors'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
{
    $request->validate([
        'title' => 'required',
        'genre' => 'required',
        'situation' => 'required',
        'description' => 'required',
        'author_id' => 'required',
    ]);

    $book->update([
        'title' => $request->title,
        'genre' => $request->genre,
        'situation' => $request->situation,
        'description' => $request->description,
        'author_id' => $request->author_id,
    ]);

    return redirect()->route('books.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
{
    $book->delete();

    return redirect()->route('books.index');
}
}
