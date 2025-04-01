<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Movie Booking</title>
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

        /* Privacy Policy Page Specific Styles */
        .privacy-hero-section {
            background: url('privacy-hero.jpg') center/cover no-repeat; /* Replace with your hero image */
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .privacy-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Adjust opacity as needed */
        }

        .privacy-hero-content {
            position: relative;
            z-index: 1;
        }

        .privacy-hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .privacy-section {
            padding: 4rem 0;
        }

        .privacy-heading {
            text-align: center;
            margin-bottom: 3rem;
            color: #ffc107;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .privacy-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #ccc;
            margin-bottom: 2rem;
        }

        .privacy-content h3 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .privacy-content ul {
            list-style-type: disc;
            padding-left: 2rem;
        }

        .privacy-content li {
            margin-bottom: 0.5rem;
        }

        .privacy-content a {
            color: #ccc; /* Link color */
            transition: color 0.3s ease;
        }

        .privacy-content a:hover {
            color: #ffc107; /* Hover color */
        }

        .privacy-icon {
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
            .privacy-hero-title {
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

    <!-- Privacy Policy Hero Section -->
    <section class="privacy-hero-section">
        <div class="privacy-hero-content">
            <h1 class="privacy-hero-title">Your Privacy Matters</h1>
        </div>
    </section>

    <!-- Privacy Policy Section -->
    <section class="privacy-section">
        <div class="container">
            <h2 class="privacy-heading">Privacy Policy</h2>
            <div class="privacy-content">
                <p>This Privacy Policy describes how Movie Booking collects, uses, and shares information when you use
                    our website. We are committed to protecting your privacy and ensuring the security of your personal
                    information.</p>

                <h3><i class="fas fa-info-circle privacy-icon"></i> Information We Collect</h3>
                <ul>
                    <li><i class="fas fa-user privacy-icon"></i><strong>Personal Information:</strong> We may collect
                        your name, email address, phone number, and other contact details when you create an account, book
                        tickets, or contact us.</li>
                    <li><i class="fas fa-tachometer-alt privacy-icon"></i><strong>Usage Data:</strong> We collect
                        information about how you use our website, including your browsing activity, search queries, and
                        booking history.</li>
                    <li><i class="fas fa-desktop privacy-icon"></i><strong>Device Information:</strong> We may collect
                        information about the device you use to access our website, including the device type, operating
                        system, and browser.</li>
                </ul>

                <h3><i class="fas fa-cog privacy-icon"></i> How We Use Your Information</h3>
                <ul>
                    <li><i class="fas fa-check privacy-icon"></i> To provide and improve our services.</li>
                    <li><i class="fas fa-magic privacy-icon"></i> To personalize your experience.</li>
                    <li><i class="fas fa-envelope privacy-icon"></i> To communicate with you about your bookings and
                        other updates.</li>
                    <li><i class="fas fa-chart-line privacy-icon"></i> To analyze usage data and improve our website's
                        performance.</li>
                </ul>

                <h3><i class="fas fa-share-alt privacy-icon"></i> Sharing Your Information</h3>
                <p>We may share your information with:</p>
                <ul>
                    <li><i class="fas fa-users privacy-icon"></i> Service providers who assist us in providing our
                        services.</li>
                    <li><i class="fas fa-film privacy-icon"></i> Theaters and partners involved in fulfilling your
                        bookings.</li>
                    <li><i class="fas fa-balance-scale privacy-icon"></i> Legal authorities when required by law.</li>
                </ul>

                <h3><i class="fas fa-user-shield privacy-icon"></i> Your Rights</h3>
                <p>You have the right to:</p>
                <ul>
                    <li><i class="fas fa-eye privacy-icon"></i> Access your personal information.</li>
                    <li><i class="fas fa-edit privacy-icon"></i> Correct inaccuracies in your personal information.</li>
                    <li><i class="fas fa-trash-alt privacy-icon"></i> Request deletion of your personal information.
                    </li>
                </ul>

                <h3><i class="fas fa-shield-alt privacy-icon"></i> Security</h3>
                <p>We take reasonable measures to protect your information from unauthorized access, use, or disclosure.</p>

                <h3><i class="fas fa-exclamation-triangle privacy-icon"></i> Changes to This Policy</h3>
                <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting
                    the new policy on our website.</p>

                <h3><i class="fas fa-question-circle privacy-icon"></i> Contact Us</h3>
                <p>If you have any questions about this Privacy Policy, please contact us at <a
                        href="mailto:privacy@moviebooking.com">privacy@moviebooking.com</a>.</p>
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