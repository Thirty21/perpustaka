<!-- resources/views/books/borrow.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Borrow Book</h2>

            <form action="{{ route('book.borrow', $book->id) }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Name:</label>
                    <input type="text" id="name" name="name" class="border border-gray-300 p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="borrow_date" class="block text-gray-700 font-semibold">Borrow Date:</label>
                    <input type="date" id="borrow_date" name="borrow_date" class="border border-gray-300 p-2">
                </div>

                <div class="mb-4">
                    <label for="return_date" class="block text-gray-700 font-semibold">Return Date:</label>
                    <input type="date" id="return_date" name="return_date" class="border border-gray-300 p-2">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full">Borrow</button>
            </form>
        </div>
    </div>
@endsection
