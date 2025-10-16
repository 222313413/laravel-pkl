<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan semua data buku
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Form tambah buku
    public function create()
    {
        return view('books.create');
    }

    // Simpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required'
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    // Form edit buku
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Update data buku
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required'
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    // Hapus data buku
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
