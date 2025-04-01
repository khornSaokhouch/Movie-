<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;


class TmdbService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('TMDB_API_KEY'); // Use the API key from the .env file
    }

    public function getPopularMovies($page = 1)
    {
        try {
            $response = $this->client->get("https://api.themoviedb.org/3/movie/popular", [
                'query' => [
                    'api_key' => $this->apiKey,
                    'page' => $page
                ]
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            // Handle exceptions
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public function getMovieDetails($movieId)
    {
        try {
            $response = $this->client->get("https://api.themoviedb.org/3/movie/{$movieId}", [
                'query' => [
                    'api_key' => $this->apiKey,
                ]
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            // Handle exceptions
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public function getMovieTrailerKey($movieId)
{
    try {
        $response = $this->client->get("https://api.themoviedb.org/3/movie/{$movieId}/videos", [
            'query' => [
                'api_key' => $this->apiKey,
                'language' => 'en-US',
            ]
        ]);

        $videos = json_decode($response->getBody()->getContents(), true)['results'] ?? [];

        // Filter for the first YouTube trailer
        foreach ($videos as $video) {
            if ($video['site'] === 'YouTube' && $video['type'] === 'Trailer') {
                return $video['key']; // Return the first trailer key found
            }
        }

        return null; // No trailer found
    } catch (RequestException $e) {
        return null; // Handle API errors gracefully
    }
}

public function getMovieVideos($movieId)
{
    try {
        $response = $this->client->get("https://api.themoviedb.org/3/movie/{$movieId}/videos", [
            'query' => [
                'api_key' => $this->apiKey,
                'language' => 'en-US',
            ]
        ]);

        $videos = json_decode($response->getBody()->getContents(), true)['results'] ?? [];

        return $videos; // Return all videos
    } catch (RequestException $e) {
        return []; // Return empty array on failure
    }
}


}
