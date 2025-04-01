<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Movie Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #181818; /* Darker, more premium feel */
            color: #e0e0e0; /* Softer white for better readability on dark backgrounds */
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

        /* Navbar Styles */
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

        /* FAQ Page Specific Styles */
        .faq-hero-section {
            background: url('faq-hero.jpg') center/cover no-repeat; /*  REPLACE THIS IMAGE!  */
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden; /* Prevents image overflow */
        }

        .faq-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)); /* Subtler gradient */
        }

        .faq-hero-content {
            position: relative;
            z-index: 1;
        }

        .faq-hero-title {
            font-size: 3.5rem; /* Slightly larger */
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Adds depth */
        }

        .faq-hero-subtitle {
            font-size: 1.2rem;
            font-weight: 400;
            color: #ccc;
        }

        .faq-section {
            padding: 4rem 0;
        }

        .faq-heading {
            text-align: center;
            margin-bottom: 3rem;
            color: #ffc107;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .faq-item {
            margin-bottom: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 1rem;
        }

        .faq-question {
            color: #fff;
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
            display: flex; /* For aligning icon and text */
            align-items: center;
            padding: 0.75rem; /*Add padding for clickable area*/
        }

        .faq-question:hover {
             color: #ffc107;  /* Style when hovering */
             background-color: rgba(255,255,255,0.05);
         }

        .faq-question i {
            margin-right: 0.5rem; /* Spacing for the icon */
            color: #ffc107;
        }

        .faq-answer {
            color: #ccc;
            line-height: 1.6;
            padding: 1rem;  /* Add some padding within the answer */
            background-color: rgba(0, 0, 0, 0.1); /* Subtle background for answers */
            border-radius: 5px;
        }


        /* Footer Styles */
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
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #fff; /* Brighter hover */
        }

        .social-icons a {
            color: #ccc;
            margin: 0 10px;
            font-size: 1.3rem;
            transition: color 0.3s ease;
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

            .faq-hero-title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
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

    <!-- FAQ Hero Section -->
    <section class="faq-hero-section">
        <div class="faq-hero-content">
            <h1 class="faq-hero-title">Frequently Asked Questions</h1>
            <p class="faq-hero-subtitle">Everything you need to know about booking your movie tickets with us.</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-heading">Common Questions</h2>

            <div class="faq-item">
                <h3 class="faq-question" data-toggle="collapse" data-target="#faqAnswer1" aria-expanded="false"
                    aria-controls="faqAnswer1">
                    <i class="fas fa-question-circle"></i> What payment methods do you accept?
                </h3>
                <div id="faqAnswer1" class="collapse faq-answer">
                    We accept all major credit cards (Visa, Mastercard, American Express) and PayPal.  We also sometimes offer promotional payment options, so keep an eye out!
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question" data-toggle="collapse" data-target="#faqAnswer2" aria-expanded="false"
                    aria-controls="faqAnswer2">
                    <i class="fas fa-question-circle"></i> How do I cancel my ticket?
                </h3>
                <div id="faqAnswer2" class="collapse faq-answer">
                    You can cancel your ticket up to 2 hours before the showtime. Please log in to your account and go
                    to "My Bookings" to initiate the cancellation.  Note that a small cancellation fee may apply in some cases.
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question" data-toggle="collapse" data-target="#faqAnswer3" aria-expanded="false"
                    aria-controls="faqAnswer3">
                    <i class="fas fa-question-circle"></i> Can I book tickets in advance?
                </h3>
                <div id="faqAnswer3" class="collapse faq-answer">
                    Yes, you can book tickets up to 30 days in advance.  This ensures you get the best seats for the hottest movies!
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question" data-toggle="collapse" data-target="#faqAnswer4" aria-expanded="false"
                    aria-controls="faqAnswer4">
                    <i class="fas fa-question-circle"></i> What if I don't receive my confirmation email?
                </h3>
                <div id="faqAnswer4" class="collapse faq-answer">
                    Please check your spam folder first. If you still don't see it, contact our support team at
                    support@moviebooking.com. Please include your booking reference number in your email.
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question" data-toggle="collapse" data-target="#faqAnswer5" aria-expanded="false"
                    aria-controls="faqAnswer5">
                    <i class="fas fa-question-circle"></i> How do I find showtimes for a specific movie?
                </h3>
                <div id="faqAnswer5" class="collapse faq-answer">
                    You can use the search bar on the homepage or browse the "Movies" section to find showtimes for a
                    particular movie.  You can also filter by location, date, and time.
                </div>
            </div>

            <!-- Add more FAQ items here using the same structure -->

        </div>
    </section>

    <!-- Footer -->
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
            <p class="footer-copyright">© <span id="year"></span> Movie Booking. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Auto update copyright year
        document.getElementById("year").innerHTML = new Date().getFullYear();

        //Optional:  If you want to ensure only one FAQ is open at a time (accordion-style)

        $('.faq-question').click(function() {
            $('.collapse').collapse('hide'); // Close all open collapses
            $(this).next('.collapse').collapse('show'); // Open the clicked one
        });

    </script>
</body>

</html>