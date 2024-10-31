<?php

namespace App\Http\Controllers;

use App\Models\Posts; 
use App\Http\Requests\PostRequest; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        Posts::create($request->validated());
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function create()
    {
        return view('posts.create');
    }
}
