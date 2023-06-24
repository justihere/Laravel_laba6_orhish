@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>Genre: <a href="{{ route('genres.show', $movie->genre) }}">{{ $movie->genre->name }}</a></p>
    <p>Description: {{ $movie->description }}</p>
    <p>Release Year: {{ $movie->release_year }}</p>
@endsection
