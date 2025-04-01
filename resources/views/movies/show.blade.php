<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['title'] }} - Movie Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            background-color: #141414;
            color: #fff;
            font-family: sans-serif;
        }

        .movie-card {
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin-top: 30px;
        }

        .movie-img {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            width: 100%;
        }

        .movie-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .movie-info {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .movie-overview {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #ddd;
        }

        .btn-custom {
            background-color: #e50914;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s;
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 15px;
        }

        .btn-custom:hover {
            background-color: #b80710;
        }

        .back-link {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s;
            display: block;
            margin-top: 20px;
        }

        .back-link:hover {
            color: #fff;
        }

        .trailer-container {
            margin-top: 20px;
        }

        .trailer-container iframe {
            width: 100%;
            height: 300px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .movie-title {
                font-size: 2rem;
            }

            .movie-info {
                font-size: 1rem;
            }

            .movie-overview {
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="movie-card">
            <div class="row">
                <!-- Left Side: Movie Poster -->
                <div class="col-md-4">
                    <img src="https://image.tmdb.org/t/p/w780/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="img-fluid movie-img">
                </div>

                <!-- Right Side: Movie Details -->
                <div class="col-md-8">
                    <h1 class="movie-title">{{ $movie['title'] }}</h1>
                    <p class="movie-info"><strong>Release Date:</strong> {{ $movie['release_date'] }}</p>
                    <p class="movie-info"><strong>Rating:</strong> {{ $movie['vote_average'] }} <i class="fas fa-star"></i></p>
                    <p class="movie-overview">{{ $movie['overview'] }}</p>

                    <!-- Trailer Section -->
                    <div class="trailer-container">
                        @if($trailerKey)
                        <iframe src="https://www.youtube.com/embed/{{ $trailerKey }}" frameborder="0" allowfullscreen></iframe>
                        @else
                        <p class="text-muted font-italic text-center">No official trailer available. <a href="{{ $youtubeTrailerUrl }}" target="_blank">Search on YouTube</a></p>
                        @endif
                    </div>
                   
                </div>
            </div>

            <a href="{{ route('home') }}" class="back-link"><i class="fas fa-arrow-left"></i> Back to Movies</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
