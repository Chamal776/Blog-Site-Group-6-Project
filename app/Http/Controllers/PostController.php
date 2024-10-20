<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
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
