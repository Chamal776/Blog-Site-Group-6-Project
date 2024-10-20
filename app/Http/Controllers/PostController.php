<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function edit($id)
{
    
    $blog = Blog::findOrFail($id);

   
    return response()->json($blog);
}
}
