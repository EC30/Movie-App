<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
{
    $apiKey = env('MOVIE_API_KEY');
    $client = new Client();

    // Fetch popular movies
    $response = $client->get("https://api.themoviedb.org/3/movie/popular?api_key=$apiKey");
    $popularMovies = json_decode($response->getBody());

    // Fetch genre data
    $genreResponse = $client->get("https://api.themoviedb.org/3/genre/movie/list?api_key=$apiKey");
    $genres = json_decode($genreResponse->getBody());
    
    // Create a genre mapping array
    $genreMapping = [];
    foreach ($genres->genres as $genre) {
        $genreMapping[$genre->id] = $genre->name;
    }

    // Map genre IDs to names for each movie
    foreach ($popularMovies->results as $movie) {
        $genreNames = [];
        foreach ($movie->genre_ids as $genreId) {
            $genreNames[] = $genreMapping[$genreId];
        }
        $movie->genre_names = implode(', ', $genreNames);
    }

     // Fetch upcoming movies
     $response = $client->get("https://api.themoviedb.org/3/movie/upcoming?api_key=$apiKey");
     $topMovies = json_decode($response->getBody());

     foreach ($topMovies->results as $movie) {
        $genreNames = [];
        foreach ($movie->genre_ids as $genreId) {
            $genreNames[] = $genreMapping[$genreId];
        }
        $movie->genre_names = implode(', ', $genreNames);
    }

    return view('home', ['popularMovies' => $popularMovies, 'topMovies' => $topMovies ]);
}

}
