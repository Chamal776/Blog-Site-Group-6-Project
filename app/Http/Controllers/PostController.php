<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function delete($id)
{
    // Find the blog post by ID or throw a 404 error if not found
    $blog = Blog::findOrFail($id);
    
    // Delete the blog post
    $blog->delete();

    // Optionally, return a success message
    return response()->json([
        'message' => 'Blog post deleted successfully!',
    ], 200);
}
}
