<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\BookController::class, 'index']);
Route::get('/books/{id}/borrow', [BookController::class, 'showBorrowForm'])->name('book.borrow.form');
Route::post('/books/{id}/borrow', [BookController::class, 'borrow'])->name('book.borrow');
Route::resource('book', BookController::class)->only('show');
