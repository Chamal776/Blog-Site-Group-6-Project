<?php

namespace App\Http\Controllers;

use App\Models\Posts; 
use App\Http\Requests\PostRequest; 
use Illuminate\Http\Request;
use App\Models\Posts; 

class PostController extends Controller
{

    // Edit function
    public function edit($id)
    {   
       
        $post = Posts::findOrFail($id);
   
        return view('posts.edit', compact('post'));
    }

    // Update function
    public function update(Request $request, $id)
    {
       
        $post = Posts::findOrFail($id);
      
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

      
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        
      
        $post->save();

       
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }
}

