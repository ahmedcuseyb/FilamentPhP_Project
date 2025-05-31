<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route to show dog breeds
Route::get('/', [BookController::class, 'index'])->name('index');

