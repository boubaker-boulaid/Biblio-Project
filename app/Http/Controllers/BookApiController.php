<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            //fetch all books sorted by created_at
            $books = Book::latest()->get();

            Log::info('Books fetched successfully for api');

            //reurn the books in json format with status code 200
            return response()->json($books, 200);
        } catch (\Exception $e) {

            //Log error
            Log::error('error while fetching books for api : ' . $e->getMessage());

            // return error message with status code 500
            return response()->json([
                'error' => 'Something went wrong while fetching books for api'
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        try {
            
            $validated = $request->validated();

            $book = Book::create($validated);

            Log::info("the book ". $validated['designation']. " created successfully from api");

            return response()->json([
                'message' => 'the book '. $request['designation']. ' created successfully' ,
                'book' => $book 
            ], 201);
        
        } catch (\Exception $e) {
            
            //Log error
            Log::error('error while fetching books for api : ' . $e->getMessage());

            // return error message with status code 500
            return response()->json([
                'error' => 'Something went wrong while stroring the book for api'
            ], 500);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {   
        try {

            return response()->json($book, 200);

        } catch (\Exception $e) {
            
            //log error
            Log::error('error fetching ('. $book->designation . ') to api ' . $e->getMessage());

            return response()->json([
                'error' => 'Something went wrong while fetching ('. $book->designation . ')  to api'
            ], 500);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        try {
            
            $validated = $request->validated();

            $book->update($validated);

            Log::info("the book ". $validated['designation']. " updated successfully from api");

            return response()->json([
                'message' => 'the book '. $validated['designation']. ' updated successfully' ,
                'book' => $book 
            ], 200);

        } catch (\Exception $e) {
           
            //Log error
            Log::error('error while updating  ('. $book->designation . ') from api ' . $e->getMessage());

            // return error message with status code 500
            return response()->json([
                'error' => 'Something went wrong while updating ('. $book->designation . ')  from api'
            ], 500);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
       try {
            
            $book->delete();

            Log::info("the book ". $book['designation']. " removed successfully");

            return response()->json($book, 204);

        } catch (\Exception $e) {
            
            //log error
            Log::error('error deleting ('. $book->designation . ') from api ' . $e->getMessage());

            return response()->json([
                'error' => 'Something went wrong while removing ('. $book->designation . ')'
            ], 500);

        }
    }
}
