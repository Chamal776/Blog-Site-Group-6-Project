<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   // Edit function
public function edit($id)
{
    $post = Posts::findOrFail($id);
    return view('posts.edit', compact('post')); // Use view for the edit form
}

// Update function
public function update(Request $request, $id)
{
    $post = Posts::findOrFail($id);

    // Validate incoming data
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    $post->update($request->all());

    return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
}

}
