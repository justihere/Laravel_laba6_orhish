@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>

    <h2>Add New Movie</h2>
    <form method="POST" action="{{ route('movies.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Movie Title" required>
        <select name="genre_id" required>
            <option value="">Select Genre</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        <button type="submit">Add Movie</button>
    </form>
@endsection
