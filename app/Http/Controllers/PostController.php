
   // Edit function
   public function edit($id)
   {
       $post = Posts::findOrFail($id);
       return response()->json($post); // Use $post instead of $blog
   } 
