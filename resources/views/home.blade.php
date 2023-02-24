@extends('layout.main')


    @section('main-content')
        <h1 class="p-3">Lista Film</h1>

        <div class="d-flex flex-wrap container justify-content-center">
            @forelse ($movies as $movie)
            @if (isset($movie))
            <div class="card me-2 my-2" style="width: 18rem;">
                <img src="{{$movie->image}}" class="card-img-top" alt="image">
                <div class="card-body">
                <h3 class="card-title">titolo:{{ $movie->title}}</h3>
                <h5 class="card-text">titolo originale: {{ $movie->original_title}}</h5>
                <h5 class="card-text">nazionalità:{{ $movie->nationality}}</h5>
                <h5 class="card-text">data di uscita:{{ $movie->original_date}}</h5>
                <h5 class="card-text">voto: {{ $movie->vote}}</h5>
        
        
        
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @endif
            
            @empty 
            <h2 class="text-center">nessun film disponibile</h2>
            @endforelse
        </div>
   
        
    @endsection