<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Movie Booking</title>
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

        /* Contact Page Specific Styles */
        .contact-hero-section {
            background: url('contact-hero.jpg') center/cover no-repeat; /* Replace with your hero image */
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .contact-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Adjust opacity as needed */
        }

        .contact-hero-content {
            position: relative;
            z-index: 1;
        }

        .contact-hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .contact-section {
            padding: 4rem 0;
        }

        .contact-heading {
            text-align: center;
            margin-bottom: 3rem;
            color: #ffc107;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .contact-form {
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            color: #fff;
            font-weight: 600;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 150px;
            border-radius: 15px; /* Rounded form fields */
        }

        input.form-control {
            border-radius: 15px; /* Rounded form fields */
        }

        .btn-primary {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
            border-radius: 30px;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            transition: background-color 0.3s ease;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #000;
        }

        .contact-info {
            margin-top: 3rem;
        }

        .contact-info h4 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .contact-info p {
            color: #ccc;
            line-height: 1.6;
        }

        .contact-info a {
            color: #ccc;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease; /* Smooth color transition on hover */
        }

        .contact-info a:hover {
            color: #ffc107;
        }

        .contact-icon {
            margin-right: 0.5rem;
            color: #ffc107; /* Use accent color for icons */
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

            .contact-hero-title {
                font-size: 2.5rem;
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

    <!-- Contact Hero Section -->
    <section class="contact-hero-section">
        <div class="contact-hero-content">
            <h1 class="contact-hero-title">Get in Touch</h1>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="contact-heading">We'd Love to Hear From You</h2>
            <div class="row">
                <div class="col-md-8">
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h4>Contact Information</h4>
                        <p>We're here to help! Reach out to us using the details below:</p>
                        <p>
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            123 Movie Lane, Cinema City, CA 91234
                        </p>
                        <p>
                            <i class="fas fa-envelope contact-icon"></i>
                            <a href="mailto:support@moviebooking.com">support@moviebooking.com</a>
                        </p>
                        <p>
                            <i class="fas fa-phone contact-icon"></i>
                            <a href="tel:+15551234567">+1 (555) 123-4567</a>
                        </p>
                    </div>
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