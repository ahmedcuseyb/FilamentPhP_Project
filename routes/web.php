<?php

use Illuminate\Support\Facades\Route;
Route::get('/books',[App\Http\Controllers\BookController::class,'index']);
Route::get('books/create',[App\Http\Controllers\BookController::class,'create']);
Route::post('books/create',[App\Http\Controllers\BookController::class,'store']);
Route::get('books/{id}/edit',[App\Http\Controllers\BookController::class,'edit']);
Route::put('books/{id}/edit',[App\Http\Controllers\BookController::class,'update']);
Route::get('books/{id}/delete',[App\Http\Controllers\BookController::class,'destroy']);




// Route::get('/', function () {
//     return view('welcome');

// });

Route::get('/', function () {
    return redirect('/admin');
});
