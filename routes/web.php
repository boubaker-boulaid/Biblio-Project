<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// original routes
Route::middleware(['auth'])->group(function () {
    // Route::post('book', [BookController::class, 'store'])->name('book.store');
    // Route::put('book/{book}', [BookController::class, 'update'])->name('book.update');
    // Route::delete('book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
    Route::resource('book', BookController::class)->except(['index', 'show']);

});

Route::resource('book', BookController::class)->only(['index','show']);

Route::get('/books', [BookController::class, 'searchPage'])->name('books');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/books/details', function () {
    return view('books.details');
})->name('details');



// breeze routes 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
