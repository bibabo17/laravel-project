<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  // Importiere den PostController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);  // Die Route zu deinem PostController
