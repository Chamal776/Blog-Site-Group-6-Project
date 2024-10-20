<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\http\Requests\PostRequest;

class PostController extends Controller
{
    public function store(PostRequest $request){
        Posts::create($request-> validated());
        return redirect('employee')-> with('success', 'Employee created successfully.'); 
    }

    public function create(){
        return view('employee.create');
        }
    
    
}