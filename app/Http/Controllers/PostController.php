<?php

namespace App\Http\Controllers;

SEU/IS/20/ICT/007
use App\Models\Posts; 
use App\Http\Requests\PostRequest; 
use Illuminate\Http\Request;
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


class PostController extends Controller
   // Edit function
   public function edit($id)
   {
       $post = Posts::findOrFail($id);
       return response()->json($post); // Use $post instead of $blog
   } 

 main
