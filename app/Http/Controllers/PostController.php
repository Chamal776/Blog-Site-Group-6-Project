<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\http\Requests\PostRequest;

class PostController extends Controller
{
   // Create function
   public function store(PostRequest $request)
   {
       Posts::create($request->validated());
       return redirect('posts')->with('success', 'Post created successfully...!');
   }

   public function create()
   {
       return view('posts.create'); // Update to match the context
    
}
}