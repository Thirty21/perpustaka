<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function showBorrowForm($id)
    {
        $book = Book::findOrFail($id);

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
            // Save the borrowing information to your database
            // Adjust this part based on your actual model and database structure
            $borrowing = $book->borrowings()->create([
                'name' => $request->input('name'),
                'borrowed_at' => $request->input('borrow_date'),
                'returned_at' => $request->input('return_date'),
            ]);

            // Decrease the stock by 1
            $book->decrement('stock');

            return redirect('books')->with('success', 'Book borrowed successfully.');
        } else {
            return redirect()->route('book')->with('error', 'Book is not available for borrowing.');
        }
    }
}
