<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::post('/language/{locale}', function (string $locale) {
    if (! in_array($locale, config('app.available_locales'))) abort(400);
    session()->put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
})->name('language.switch');

// original routes
Route::middleware(['auth'])->group(function () {
    Route::resource('book', BookController::class)->except(['index', 'show']);
    Route::get('/sendBook/{book}', [BookController::class, 'mailBookToUser'])->name('sendBook');

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
