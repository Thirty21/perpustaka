<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function showBorrowForm($id)
    {
        $decryptID = Crypt::decryptString($id);
        $book = Book::findOrFail($decryptID);

        return view('book.borrow', compact('book'));
    }

    public function borrow(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
        ]);

        $book = Book::findOrFail($id);

        // Check if the book is available (stock > 0)
        if ($book->stock > 0) {
            $borrowing = $book->borrowings()->create([
                'name' => $request->input('name'),
                'borrowed_at' => $request->input('borrow_date'),
                'returned_at' => $request->input('return_date'),
            ]);

            // Decrease the stock by 1
            $book->decrement('stock');

            return redirect('')->with('success', 'Book borrowed successfully.');
        } else {
            return redirect('')->with('error', 'Book is not available for borrowing.');
        }
    }

    public function show($id)
    {
        $decryptID = Crypt::decryptString($id);
        $book = Book::findOrFail($decryptID);
        return view('book.show', compact('book'));
    }
}
