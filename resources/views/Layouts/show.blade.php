@extends('blog.layout')

@section('content')
<style>
    /* Custom CSS Styles */
    .post-container {
        background-color: #f1f3f5; /* Light gray background */
        border-radius: 10px; /* Soft rounded corners */
        padding: 25px; /* More padding */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); /* Larger shadow for depth */
        animation: fadeIn 1s ease-in-out; /* Page fade-in animation */
    }

    .post-title {
        color: #28a745; /* Green title for freshness */
        margin-bottom: 25px; /* More space below title */
        font-size: 2rem; /* Larger title */
        text-align: center;
    }

    .post-image {
        width: 100%; /* Full width for image */
        max-width: 600px; /* Max width for responsiveness */
        margin-bottom: 30px; /* More space below image */
        border-radius: 10px; /* Rounded image corners */
        transition: transform 0.3s ease; /* Smooth hover animation */
    }

    .post-image:hover {
        transform: scale(1.05); /* Zoom effect on hover */
    }

    .post-details p {
        margin-bottom: 15px; /* More space between details */
        font-size: 1.1rem; /* Slightly larger text */
    }

    .extended-details {
        display: none;
        margin-top: 25px; /* Space above extended section */
        background-color: #e9ecef;
        padding: 20px;
        border-radius: 8px;
        opacity: 0;
        transition: opacity 0.7s ease-in-out; /* Smooth fade-in for extended details */
    }

    .extended-details h5 {
        color: #007bff;
        text-transform: uppercase;
    }

    .extended-details h6 {
        color: #343a40;
    }

    .extended-details p {
        color: #495057;
        line-height: 1.6; /* Increased line height for readability */
    }

    .btn-custom {
        margin-top: 15px;
        padding: 12px 20px;
        font-size: 1rem;
        transition: background-color 0.3s;
    }

    .btn-custom:hover {
        background-color: #28a745; /* Green background on hover */
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
</style>

<div class="container mt-5 post-container">
    <h2 class="post-title">{{ $post->title }}</h2>
    <div class="text-center">
        <img src="{{ asset($post->image) }}" class="img-fluid mb-4 rounded post-image" alt="{{ $post->title }}">
    </div>

    <div class="post-details mb-4">
        <p><strong>Author:</strong> {{ $post->author }}</p>
        <p><strong>Category:</strong> {{ $post->category }}</p>
        <p><strong>Published:</strong> {{ $post->published_at->format('F j, Y') }}</p>
        <p><strong>Description:</strong> {{ $post->description }}</p>
    </div>

    <!-- Read More Button -->
    <div class="text-center">
        <button type="button" class="btn btn-custom" id="readMoreButton" onclick="toggleDetails()">
            Read More
        </button>
        <a href="{{ url('blog') }}" class="btn btn-primary ms-2 btn-custom">Back to Blog</a>
    </div>

    <!-- Extended details section (hidden initially) -->
    <div id="extendedDetails" class="extended-details mt-4">
        <hr>
        <h5>Extended Story</h5>

        <h6>1. Discovering the Unknown</h6>
        <p>On an ordinary afternoon, Mia stumbled across an antique shop that she had never seen before. Its dusty windows beckoned her with forgotten relics from a bygone era. Inside, she found an intricately carved box that seemed to hum with energy. Unbeknownst to her, opening the box would unravel mysteries that had been buried for centuries.</p>

        <h6>2. The Whispering Shadows</h6>
        <p>As night fell over the town, the streets seemed to whisper secrets in the wind. The shadows grew longer and more ominous, as if they had a life of their own. Ethan, caught in the eerie silence, could hear his heartbeat quicken. The whispers led him to an old manor at the edge of town, a place where no one dared to go after dark. Little did he know, this was the beginning of an adventure that would change him forever.</p>

        <h6>3. Beyond the Horizon</h6>
        <p>Far beyond the horizon, where the sky meets the ocean, a lone sailor named Aiden charted unknown waters. His ship, the Endeavor, was the last of its kind. With each passing day, he felt the call of the sea grow stronger, urging him toward a distant island that appeared only in the stars. As Aiden sailed further into the uncharted, he discovered something that no one had ever dared to dream of.</p>

        <h6>4. The Clockwork City</h6>
        <p>In a city powered by gears and steam, Amelia dreamed of adventure beyond the mechanical walls. Every day, she worked in the heart of the city's central clock tower, watching the gears turn endlessly. One fateful day, an unexpected malfunction caused the gears to slow, and in that moment, Amelia realized the city was hiding a secret—a secret that could change everything.</p>
    </div>
</div>

<script>
    function toggleDetails() {
        const details = document.getElementById('extendedDetails');
        const button = document.getElementById('readMoreButton');

        if (details.style.display === 'none' || details.style.display === '') {
            details.style.display = 'block';
            setTimeout(() => {
                details.style.opacity = 1;
            }, 50);
            button.textContent = 'Read Less';
        } else {
            details.style.opacity = 0;
            setTimeout(() => {
                details.style.display = 'none';
            }, 500);
            button.textContent = 'Read More';
        }
    }
</script>

@endsection