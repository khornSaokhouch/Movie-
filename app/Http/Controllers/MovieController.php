<?php

namespace App\Http\Controllers;

use App\Services\TmdbService;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    protected $tmdbService;

    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function index()
    {
        $movies = $this->tmdbService->getPopularMovies();
        return view('home', ['movies' => $movies['results'] ?? []]);
    }

    public function show($id)
    {
        $movie = $this->tmdbService->getMovieDetails($id);
        
        if (!$movie) {
            abort(404, 'Movie not found');
        }

        $trailerKey = $this->tmdbService->getMovieTrailerKey($id);
        $videos = $this->tmdbService->getMovieVideos($id) ?? [];

        // Fallback YouTube search if no trailer found
        $youtubeTrailerUrl = $trailerKey 
            ? "https://www.youtube.com/watch?v={$trailerKey}"
            : 'https://www.youtube.com/results?search_query=' . urlencode($movie['title'] . ' trailer');

        return view('movies.show', compact('movie', 'trailerKey', 'youtubeTrailerUrl', 'videos'));
    }
    
    public function payment(Request $request)
    {
        $validated = $request->validate([
            'movie_id' => 'required|integer|exists:movies,id',
            'location' => 'required|string',
            'showtime' => 'required|date_format:Y-m-d H:i:s',
            'seats' => 'required|array',
            'seats.*' => 'integer|min:1',
        ]);

        return view('movies.payment', compact('validated'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:movies,title',
            'poster_path' => 'required|string',
            'overview' => 'required|string',
            'release_date' => 'required|date',
            'vote_average' => 'required|numeric|min:0|max:10',
        ]);

        Movie::create($validated);

        return redirect()->back()->with('success', 'Movie added successfully!');
    }
}
