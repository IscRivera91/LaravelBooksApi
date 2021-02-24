<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;

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
        
    }

    /**
     * Create a instance of book
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Return an specific book
     * 
     * @param $book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        
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
