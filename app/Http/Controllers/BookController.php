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
    public function update(Request $request,Book $book)
    {
        $dataBook = $request->validate([
            'title' => 'max:255',
            'description' => 'max:255',
            'price' => 'numeric',
            'author_id' => 'numeric'
        ]);

        $book->fill($dataBook);

        if ($book->isClean()) {
            return $this->errorResponse('At least one value must change',Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $book->save();
        return $this->successResponse($book);
    }

    /**
     * destroy an existing book
     *
     * @return Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return $this->successResponse($book);
    }
}
