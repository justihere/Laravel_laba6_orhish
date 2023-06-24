<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $genres = Genre::all();
        return view('movies.index', compact('movies', 'genres'));
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required|exists:genres,id',
        ]);

        $movie = new Movie();
        $movie->title = $validatedData['title'];
        $movie->genre_id = $validatedData['genre_id'];
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie added successfully');
    }
}
