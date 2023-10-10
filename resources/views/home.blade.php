@extends('layout')
@section('contents')
<h2 class="text-center uppercase tracing wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
<div class="container mt-6">
    <div id="movieCarousel" class="carousel slide" data-ride="carousel">
        <div class="row justify-content-center"> <!-- Center-align the content -->
            @if($popularMovies)
            @foreach($popularMovies->results as $movie)
            @if(is_object($movie))
            <div class="col-md-3"> 
                <div class="card mb-4">
                    <a href="{{ route('movie.show', ['id' => $movie->id]) }}">
                        <img src="{{'http://image.tmdb.org/t/p/w500/'.$movie->poster_path}}" class="card-img-top" alt="{{$movie->original_title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->release_date}}</p>
                            <p class="card-text">{{ $movie->genre_names }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>
    </div>
</div>
<h2 class="text-center uppercase tracing wider text-orange-500 text-lg font-semibold">Upcoming Movies</h2>
<div class="container mt-4">
<div id="movieCarousel" class="carousel slide" data-ride="carousel">
    <div class="row justify-content-center"> <!-- Center-align the content -->
        @if($topMovies)
        @foreach($topMovies->results as $movie)
        @if(is_object($movie))
        <div class="col-md-3"> 
            <div class="card mb-4">
                <a href="{{ route('movie.show', ['id' => $movie->id]) }}">
                    <img src="{{'http://image.tmdb.org/t/p/w500/'.$movie->poster_path}}" class="card-img-top" alt="{{$movie->original_title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->release_date}}</p>
                        <p class="card-text">{{ $movie->genre_names }}</p>
                </a>  
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endif
    </div>
</div>
</div>
@endsection
