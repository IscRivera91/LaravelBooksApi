<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponse;

    /**
     * Return books list
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return $this->successResponse($books);
    }

    /**
     * Create a instance of book
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dataBook = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'author_id' => 'required|numeric'
        ]);

        $book = Book::create($dataBook);
        return $this->successResponse($book,Response::HTTP_CREATED);
    }

    /**
     * Return an specific book
     * 
     * @param $book
     * @return Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $this->successResponse($book);
    }

    /**
     * update the information of an existing book
     * 
     * @param Illuminate\Http\Request $request
     * @param $book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        

    }

    /**
     * destroy an existing book
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
        
    }
}
