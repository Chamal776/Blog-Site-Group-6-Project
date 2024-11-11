@extends('library.layout')

@section('content')

<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div>
        <a href="{{ url('Blog_Library/create') }}" class="btn btn-outline-warning">Create New Post</a>
    </div>

    <h2 class="mt-4 text-center text-dark">Explore Blog Posts</h2>

    <div class="row justify-content-center">
        @forelse ($BlogPosts as $post)
            <div class="col-md-4 mb-4">
                <div class="card custom-card shadow-lg rounded-lg">
                    <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{ $post->title }}</h5>
                        <p class="card-text text-muted"><strong>Author:</strong> {{ $post->author }}</p>
                        <p class="card-text text-muted"><strong>Category:</strong> {{ $post->category }}</p>
                        <p class="card-text text-muted">{{ \Str::limit($post->description, 120) }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ url('Blog_Library/' . $post->id) }}" class="btn btn-info custom-btn">Read Full Post</a>
                            <a href="{{ url('Blog_Library/' . $post->id . '/edit') }}" class="btn btn-secondary custom-btn">Edit</a>
                            <form action="{{ url('Blog_Library/delete/' . $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger custom-btn">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning">No posts available at the moment.</div>
            </div>
        @endforelse
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, #FF9A8B, #FFC3A0); /* Soft sunset gradient */
        font-family: 'Open Sans', sans-serif;
    }

    .custom-card {
        background-color: #fdfdfd;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        background-color: #f7f7f7;
        animation: cardHover 0.4s ease-in-out;
    }

    .custom-card img {
        border-radius: 15px 15px 0 0;
        height: 200px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .custom-card:hover img {
        transform: scale(1.1);
    }

    .card-title {
        font-size: 1.25rem;
        color: #2d3e50;
        font-weight: bold;
        text-transform: capitalize;
    }

    .custom-btn {
        transition: background-color 0.3s ease, transform 0.3s ease;
        border-radius: 10px;
        padding: 8px 20px;
    }

    .custom-btn:hover {
        background-color: #007bff;
        transform: scale(1.05);
    }

    .btn-danger {
        background-color: #ff4c4c;
        border: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #ff1e1e;
    }

    @keyframes cardHover {
        0% { transform: scale(1); }
        100% { transform: scale(1.05); }
    }

    .card-body {
        background: #fff;
        border-radius: 0 0 15px 15px;
    }

    .alert {
        font-size: 1.1rem;
        padding: 15px;
    }
</style>

@endsection
