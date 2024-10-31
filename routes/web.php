<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Default route
Route::get('/', function () {
    return view('welcome');
});
