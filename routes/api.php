<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'BooksApi';
});

Route::group(['prefix'=>'books'], function () {

    Route::get('/',[BookController::class,'index']);
    Route::post('/',[BookController::class,'store']);
    Route::get('/{book}',[BookController::class,'show']);
    Route::put('/{book}',[BookController::class,'update']);
    Route::patch('/{book}',[BookController::class,'update']);
    Route::delete('/{book}',[BookController::class,'destroy']);

});
