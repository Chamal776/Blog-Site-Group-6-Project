@extends('blog.layout')

@section('content')

<div class="container mt-5">
    <div class="card shadow-lg border-0 animate-card" style="background-color: #f9f9f9;">
        <div class="card-header text-center py-4">
            <h2 class="text-primary animate-text">Edit Blog Post</h2>
        </div>
        <div class="card-body p-4">

            <form action="{{ url('blog/' . $post->id . '/update') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-12 animate-input">
                        <label for="title" class="font-weight-semibold">Post Title</label>
                        <input type="text" name="title" class="form-control border-light rounded-pill shadow-sm focus-input" id="title" value="{{ $post->title }}" placeholder="Enter the post title" required>
                    </div>

                    <div class="form-group col-md-6 animate-input">
                        <label for="author" class="font-weight-semibold">Author</label>
                        <input type="text" name="author" class="form-control border-light rounded-pill shadow-sm focus-input" id="author" value="{{ $post->author }}" placeholder="Enter author's name" required>
                    </div>

                    <div class="form-group col-md-6 animate-input">
                        <label for="category" class="font-weight-semibold">Category</label>
                        <input type="text" name="category" class="form-control border-light rounded-pill shadow-sm focus-input" id="category" value="{{ $post->category }}" placeholder="Enter post category" required>
                    </div>

                    <div class="form-group col-12 animate-input">
                        <label for="content" class="font-weight-semibold">Content</label>
                        <textarea name="content" class="form-control border-light rounded-3 shadow-sm focus-input" id="content" placeholder="Edit your blog content here..." required>{{ $post->content }}</textarea>
                    </div>

                    <div class="form-group col-12 animate-input">
                        <label for="tags" class="font-weight-semibold">Tags</label>
                        <input type="text" name="tags" class="form-control border-light rounded-pill shadow-sm focus-input" id="tags" value="{{ $post->tags }}" placeholder="Enter tags, separated by commas">
                    </div>

                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow-sm focus-btn animate-btn">Update Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

    .container {
        max-width: 800px;
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
    }

    .font-weight-semibold {
        font-weight: 600;
        color: #6c63ff;
    }

    .form-control {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .form-control:focus {
        border-color: #6c63ff;
        box-shadow: 0 0 10px rgba(108, 99, 255, 0.2);
    }

    .focus-input:hover {
        transform: scale(1.03);
        box-shadow: 0px 6px 15px rgba(108, 99, 255, 0.15);
    }

    .focus-btn {
        background-color: #6c63ff;
        color: white;
        font-weight: bold;
        transition: transform 0.2s ease, background-color 0.2s ease;
    }

    .focus-btn:hover {
        background-color: #5a54e6;
        transform: scale(1.05);
    }

    .animate-card {
        animation: fadeInUp 1s ease-out;
    }

    .animate-text {
        animation: fadeInDown 1s ease-out;
    }

    .animate-btn {
        animation: fadeInUp 1s ease-out;
    }

    .animate-input {
        animation: slideIn 1s ease-out;
    }

    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
        0% { opacity: 0; transform: translateX(-50px); }
        100% { opacity: 1; transform: translateX(0); }
    }

</style>

@endsection