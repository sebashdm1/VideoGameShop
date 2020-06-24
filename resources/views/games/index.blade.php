@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($games as $game)
                <div class="col-md-4">
                    <div class="card padding">
                        <header>
                            <h2 class = "card-title">{{$game->videogamename}}</h2>
                            <h4 class="card-subtitle">{{$game->price}}</h4>
                        </header>
                        <p class="card-text">{{$game->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="actions">
            {{$games->links()}}

        </div>
    </div>
@endsection
