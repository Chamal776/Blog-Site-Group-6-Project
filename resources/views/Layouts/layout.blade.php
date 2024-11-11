<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMoK1o5fQ8mLHD8Anrw0KtvJl89C9P2ZdZcjgmx" crossorigin="anonymous">
    <style>
        /* Body background with gradient */
        body {
            background: linear-gradient(180deg, #2E3192, #1BFFFF);
            font-family: Arial, sans-serif;
            color: #2c3e50;
        }

        /* Navbar styling */
        .navbar {
            background: transparent;
        }
        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: #fff !important;
        }
        .nav-link {
            color: #f0f0f0 !important;
            font-weight: 500;
            font-size: 16px;
        }

        /* Content styling */
        #content {
            padding: 40px;
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        #content h1 {
            font-size: 32px;
        }
        #content p {
            font-size: 18px;
        }

        /* Footer styling */
        footer {
            background-color: rgba(44, 62, 80, 0.9);
        }
        footer p {
            color: #ecf0f1;
            font-size: 14px;
        }
        footer .social-links a {
            color: #1BFFFF;
            font-size: 20px;
            margin-right: 10px;
        }
        footer .social-links a:hover {
            color: #ffe600;
            transform: scale(1.1);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Blog Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('blog.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="content">
        <h1>Welcome to the Blog Site</h1>
        <p>Explore our latest posts, stories, and insights.</p>
        @yield('content')
    </div>

    <!-- About Us Modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModalLabel">About Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!--Team Members-->
                <div class="modal-body">
                    <p>Welcome to the Blog Site! Our mission is to share insightful articles, inspiring stories, and the latest updates on various topics. Meet the team behind the content:</p>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Ishani Bandara</h5>
                            <p><strong>Role:</strong> Editor-in-Chief</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Nethmi Udaraa</h5>
                            <p><strong>Role:</strong> Senior Writer</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Kausha Umayanganaa</h5>
                            <p><strong>Role:</strong> Content Creator</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Harshana Bandara</h5>
                            <p><strong>Role:</strong> Content Strategist</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Thilina Kottegoda</h5>
                            <p><strong>Role:</strong> Community Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Feel free to reach out to us with any questions or suggestions. We would love to hear from you!</p>
                    <ul>
                        <li>Email: info@blogsite.com</li>
                        <li>Phone: +1 234 567 890</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Blog Site. All rights reserved.</p>
            <div class="social-links mt-2">
                <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>
