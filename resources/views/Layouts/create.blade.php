@extends('blog.layout')
@section('content')

<div class="container mt-4">
    <div class="card shadow-lg border-0 animate-card" style="background-color: #fff;">
        <div class="card-header text-center py-4">
            <h2 class="text-primary font-weight-bold animate-text">Create Your Blog Post</h2>
        </div>
        <div class="card-body p-4">

            <form action="{{ url('blog/store') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-12 animate-input">
                        <label for="title" class="font-weight-semibold">Blog Title</label>
                        <input type="text" name="title" class="form-control border-light rounded-pill shadow-sm focus-input" id="title" placeholder="Enter the title of your blog" required>
                    </div>

                    <div class="form-group col-md-6 animate-input">
                        <label for="author" class="font-weight-semibold">Author Name</label>
                        <input type="text" name="author" class="form-control border-light rounded-pill shadow-sm focus-input" id="author" placeholder="Author's name" required>
                    </div>

                    <div class="form-group col-12 animate-input">
                        <label for="content" class="font-weight-semibold">Blog Content</label>
                        <textarea name="content" class="form-control border-light rounded-3 shadow-sm focus-input" id="content" rows="6" placeholder="Write your blog content here..." required></textarea>
                    </div>

                    <div class="form-group col-md-6 animate-input">
                        <label for="tags" class="font-weight-semibold">Tags</label>
                        <input type="text" name="tags" class="form-control border-light rounded-pill shadow-sm focus-input" id="tags" placeholder="Add some tags (comma-separated)">
                    </div>

                    <div class="form-group col-md-6 animate-input">
                        <label for="category" class="font-weight-semibold">Category</label>
                        <input type="text" name="category" class="form-control border-light rounded-pill shadow-sm focus-input" id="category" placeholder="Choose a category" required>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow-sm focus-btn animate-btn">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

    .card {
        border-radius: 15px;
        overflow: hidden;
    }

    .card-header {
        background-color: #e3f2fd;
    }

    .font-weight-semibold {
        font-weight: 600;
        color: #3f51b5;
    }

    .form-control {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .form-control:focus {
        border-color: #3f51b5;
        box-shadow: 0 0 8px rgba(63, 81, 181, 0.2);
    }

    .focus-input:hover {
        transform: scale(1.02);
        box-shadow: 0px 4px 12px rgba(63, 81, 181, 0.15);
    }

    .focus-btn {
        background-color: #2196f3;
        color: white;
        font-weight: bold;
        transition: transform 0.2s ease, background-color 0.2s ease;
    }

    .focus-btn:hover {
        background-color: #1976d2;
        transform: scale(1.05);
    }

    .container {
        max-width: 900px;
        margin-top: 40px;
    }

    .animate-card {
        animation: fadeInUp 1s ease-out;
    }

    .animate-text {
        animation: fadeInDown 1s ease-out;
    }

    .animate-input {
        animation: slideInUp 0.5s ease-out;
    }

    .animate-btn {
        animation: bounce 0.6s ease-out;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes bounce {
        0% {
            transform: scale(0.95);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

@endsection