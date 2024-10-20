<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Blog routes

// To show a list of all blogs
Route::get('blog', [PostController::class, 'index']);

// To show the form for creating a new blog post
Route::get('blog/create', [PostController::class, 'create']);

// To store a new blog post
Route::post('blog/store', [PostController::class, 'store']);

// To show the form for editing a blog post
Route::get('blog/{id}/edit', [PostController::class, 'edit']);

// To update an existing blog post
Route::post('blog/{id}', [PostController::class, 'update']);

// To delete a blog post
Route::delete('blog/{id}', [PostController::class, 'delete']);

// To display all blog posts (if needed as a separate view)
Route::get('blog/all', [PostController::class, 'all']); 
