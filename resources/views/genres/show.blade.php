@extends('layouts.app')

@section('content')
    <h1>{{ $genre->name }} Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
@endsection
