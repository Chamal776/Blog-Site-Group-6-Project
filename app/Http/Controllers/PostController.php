<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts; // Ensure the Post model is imported correctly
use App\Http\Requests\PostRequest;

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
        return view('posts.create'); // Update to match the context
    }

    // Edit function
    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        return response()->json($post); // Use $post instead of $blog
    }

    // Delete function
    public function delete($id)
    {
        // Find the post by ID or throw a 404 error if not found
        $post = Posts::findOrFail($id);
        
        // Delete the post
        $post->delete();
    
        // Optionally, return a success message
        return response()->json([
            'message' => 'Post deleted successfully...!',
        ], 200);
    }
}
