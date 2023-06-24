@extends('layouts.app')

@section('content')
    <h1>Genres</h1>

    <ul>
        @foreach($genres as $genre)
            <li>
                <a href="{{ route('genres.show', $genre) }}">{{ $genre->name }}</a>
            </li>
        @endforeach
    </ul>

    <h2>Add New Genre</h2>
    <form method="POST" action="{{ route('genres.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Genre Name" required>
        <button type="submit">Add Genre</button>
    </form>
@endsection
