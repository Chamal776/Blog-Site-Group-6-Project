<?php

namespace App\Http\Controllers;

use App\Models\Posts; 
use App\Http\Requests\PostRequest; 
use Illuminate\Http\Request;
use App\Models\Posts; 


class PostController extends Controller
{
    //SEU/IS/20/ICT/085's Function
   // Delete function
   public function delete($id)
   {
       
       $post = Posts::findOrFail($id);       
       $post->delete();   
       
       return response()->json([
           'message' => 'Post deleted successfully...!',
       ], 200);
   }
  
  
  //SEU/IS/20/ICT/007's Function
    public function store(PostRequest $request)
    {
        Posts::create($request->validated());
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function create()
    {
        return view('posts.create');
    }
  

//SEU/IS/20/ICT/040's Function
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


