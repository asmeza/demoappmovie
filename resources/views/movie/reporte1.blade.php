@extends('layouts.main')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('movie.index')}}">Peliculas</a></li>
        <li><a href="{{ route('movie.create')}}">Insertar</a></li>
    </ol>


    <!-- Main component for a primary marketing message or call to action -->
    <div class="page-header">
        <h1>Reporte Basico</h1>
    </div>

    @foreach ($movies as $movie)
        {{$movie->id}}
        {{$movie->name}}
        {{$movie->movie_types_id}}
    @endforeach

@endsection