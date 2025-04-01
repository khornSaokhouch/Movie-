<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - Movie Booking</title>
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

        /* Terms of Service Page Specific Styles */
        .terms-hero-section {
            background: url('terms-hero.jpg') center/cover no-repeat; /* Replace with your hero image */
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .terms-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Adjust opacity as needed */
        }

        .terms-hero-content {
            position: relative;
            z-index: 1;
        }

        .terms-hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .terms-section {
            padding: 4rem 0;
        }

        .terms-heading {
            text-align: center;
            margin-bottom: 3rem;
            color: #ffc107;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .terms-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #ccc;
            margin-bottom: 2rem;
        }

        .terms-content h3 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .terms-content ol {
            padding-left: 2rem;
        }

        .terms-content li {
            margin-bottom: 0.5rem;
        }

        .terms-content a {
            color: #ccc; /* Link color */
            transition: color 0.3s ease;
        }

        .terms-content a:hover {
            color: #ffc107; /* Hover color */
        }

        .terms-icon {
            margin-right: 0.5rem;
            color: #ffc107;
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
            .terms-hero-title {
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

    <!-- Terms of Service Hero Section -->
    <section class="terms-hero-section">
        <div class="terms-hero-content">
            <h1 class="terms-hero-title">Terms of Service</h1>
        </div>
    </section>

    <!-- Terms of Service Section -->
    <section class="terms-section">
        <div class="container">
            <h2 class="terms-heading">Terms and Conditions</h2>
            <div class="terms-content">
                <p>Please read these Terms of Service carefully before using the Movie Booking website. By using our
                    website, you agree to be bound by these terms and conditions.</p>

                <h3><i class="fas fa-handshake terms-icon"></i> Acceptance of Terms</h3>
                <p>By accessing and using Movie Booking, you agree to be bound by these Terms of Service and all
                    applicable laws and regulations.</p>

                <h3><i class="fas fa-user-check terms-icon"></i> Use of Our Website</h3>
                <ol>
                    <li>You must be at least 18 years old to use our website.</li>
                    <li>You agree to provide accurate and complete information when creating an account or booking
                        tickets.</li>
                    <li>You are responsible for maintaining the confidentiality of your account credentials.</li>
                </ol>

                <h3><i class="fas fa-ticket-alt terms-icon"></i> Ticket Bookings</h3>
                <ol>
                    <li>All ticket bookings are subject to availability and confirmation.</li>
                    <li>We reserve the right to cancel or modify bookings due to unforeseen circumstances.</li>
                    <li>Refund policies vary depending on the theater and event.</li>
                </ol>

                <h3><i class="fas fa-exclamation-triangle terms-icon"></i> Disclaimer of Warranty</h3>
                <p>Our website is provided on an "as is" and "as available" basis. We make no warranties, express or
                    implied, regarding the accuracy, reliability, or suitability of our website.</p>

                <h3><i class="fas fa-gavel terms-icon"></i> Limitation of Liability</h3>
                <p>We shall not be liable for any direct, indirect, incidental, special, or consequential damages
                    arising out of or in connection with your use of our website.</p>

                <h3><i class="fas fa-balance-scale terms-icon"></i> Governing Law</h3>
                <p>These Terms of Service shall be governed by and construed in accordance with the laws of the State of
                    California.</p>

                <h3><i class="fas fa-edit terms-icon"></i> Changes to These Terms</h3>
                <p>We may update these Terms of Service from time to time. We will notify you of any changes by posting
                    the new terms on our website.</p>

                <h3><i class="fas fa-question-circle terms-icon"></i> Contact Us</h3>
                <p>If you have any questions about these Terms of Service, please contact us at <a
                        href="mailto:terms@moviebooking.com">terms@moviebooking.com</a>.</p>
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