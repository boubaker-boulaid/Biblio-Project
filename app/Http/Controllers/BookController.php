<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $books = Book::latest()->get();

            return view('books.index', compact('books'));
        
        } catch (\Throwable $th) {
            
            return redirect()->back()->withInput()->with('error', 'error : ' . $th->getMessage());
        
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        try {

            $validated = $request->validated();

            if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
                $image = $request->file('cover');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('covers'), $imageName);
                $validated['cover'] = $imageName;
            }

            Book::create($validated);

            return redirect()->route('book.index')->with('success', 'the book was added successfully !');
        } catch (\Exception $e) {

            return redirect()->back()->withInput()
                ->with('error', 'error : ' . $e->getMessage());
        }
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
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        try {

            $validated = $request->validated();

            //checks if a file with name cover was uploaded and the upload went successfully without errors
            if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
                $image = $request->file('cover');
                $imageName = time() . '_' . $image->getClientOriginalName(); //set a unique name to the cover 
                $image->move(public_path('covers'), $imageName); //move the cover to public/covers/
                $validated['cover'] = $imageName;
            }

            //delete the old cover before saving the new one 
            if ($book->cover && file_exists(public_path('covers/' . $book->cover)) && $book->cover !== 'no_cover.jpg') {
                unlink(public_path('covers/' . $book->cover));
            }

            $book->update($validated);

            return redirect()->route('book.index')->with('success', 'the book was updated successfully !');
        } catch (\Exception $e) {

            return redirect()->back()->withInput()->with('error', 'error : ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        try {

            $book->delete();

            return redirect()->route('book.index')->with('success', 'the book was deleted successfully !');
        } catch (\Exception $e) {

            return redirect()->back()->withInput()->with('error', 'error : ' . $e->getMessage());
        }
    }
}
