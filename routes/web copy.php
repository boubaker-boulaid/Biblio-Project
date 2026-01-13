<!-- <?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::resource('book',BookController::class);

Route::get('/books', function () {
    return view('books');
})->name('books');

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

Route::get('/search', [BookController::class, 'search'])->name('search'); 
