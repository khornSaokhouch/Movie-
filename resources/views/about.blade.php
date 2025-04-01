<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Movie Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
        }

        /* General Styles */
        a {
            color: #fff;
            transition: color 0.3s ease;
            text-decoration: none !important;
        }

        a:hover {
            color: #ffc107;
        }

        /* Navbar Styles (Keep Navbar Styling Consistent) */
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            padding: 1rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.75rem;
            letter-spacing: 1px;
        }

        .nav-link {
            font-weight: 600;
            margin-right: 20px;
        }

        .nav-link:last-child {
            margin-right: 0;
        }

        .form-control {
            border-radius: 30px;
            border: none;
            padding: 0.75rem 1.25rem;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-outline-light {
            border-radius: 30px;
            border-color: #fff;
            color: #fff;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
        }

        /* About Us Page Specific Styles */
        .hero-section {
            background: url('about-hero.jpg') center/cover no-repeat;  /* Replace with your hero image */
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
            /* Add an overlay for better text readability */
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Adjust opacity as needed */
        }

        .hero-content {
            position: relative;
            z-index: 1; /* Ensure text is above the overlay */
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 600;
            color: #eee;
        }

        .about-section {
            padding: 4rem 0;
        }

        .about-heading {
            text-align: center;
            margin-bottom: 3rem;
            color: #ffc107;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .about-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #ccc;
        }

        .team-section {
            padding: 4rem 0;
            background-color: #121212; /* Slightly darker background */
        }

        .team-heading {
            text-align: center;
            margin-bottom: 3rem;
            color: #ffc107;
            font-weight: 700;
            font-size: 2rem;
        }

        .team-member {
            text-align: center;
            margin-bottom: 2rem;
            transition: transform 0.3s ease; /* Add a smooth transition */
        }

        .team-member:hover {
            transform: translateY(-5px); /* Slightly lift the team member on hover */
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 3px solid #333; /* Add a subtle border */
        }

        .team-member h4 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .team-member p {
            color: #888;
            font-size: 0.9rem;
        }

        /* Footer Styles (Keep Footer Styling Consistent) */
        footer {
            background-color: #121212;
            padding: 3rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .footer-links {
            margin-bottom: 1.5rem;
        }

        .footer-links a {
            margin: 0 15px;
            font-weight: 600;
            color: #ccc;
        }

        .social-icons a {
            color: #ccc;
            margin: 0 10px;
            font-size: 1.3rem;
        }

        .social-icons a:hover {
            color: #ffc107;
        }

        .footer-copyright {
            font-size: 0.9rem;
            color: #888;
        }

        /* Responsive Adjustments */
        @media (max-width: 767.98px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            .nav-link {
                margin-right: 0;
                padding: 0.75rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            }

            .form-inline {
                margin-top: 1rem;
            }

            .team-member {
                text-align: center;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }
        }

    </style>
</head>

<body>

    <!-- Navbar (Use the same Navbar as your other pages) -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Movie<span style="color:#ffc107">Booking</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-3">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Movies" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">About MovieBooking</h1>
            <p class="hero-subtitle">Get to know our story and our team.</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="about-heading">Our Story</h2>
            <div class="about-content">
                <p>Welcome to MovieBooking, your ultimate destination for discovering and booking movie tickets online.
                    We are passionate about bringing you the best cinematic experiences with ease and convenience.</p>

                <p>Our mission is to provide a seamless and user-friendly platform where you can explore a wide selection
                    of movies, find showtimes that fit your schedule, and effortlessly book your tickets. We work directly with
                    theaters
                    to provide the most up-to-date information. </p>

                <p>We are dedicated to enhancing your movie-going experience by providing detailed movie information,
                    trailers, reviews, and secure booking options. Our customer support team is always available to assist
                    you with any questions or concerns.</p>

                <p>Thank you for choosing MovieBooking. We hope you enjoy the show!</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="team-heading">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4 team-member">
                    <img src="team-member-1.jpg" alt="John Doe">
                    <h4>John Doe</h4>
                    <p>CEO & Founder</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="team-member-2.jpg" alt="Jane Smith">
                    <h4>Jane Smith</h4>
                    <p>Head of Marketing</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="team-member-3.jpg" alt="Peter Jones">
                    <h4>Peter Jones</h4>
                    <p>Lead Developer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Use the same Footer as your other pages) -->
    <footer>
        <div class="container">
            <div class="footer-links">
            <a href="{{ route('privacyPolicy') }}">Privacy Policy</a>
            <a href="{{ route('termsofService') }}">Terms of Service</a>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="footer-copyright">© {{ date('Y') }} Movie Booking. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>