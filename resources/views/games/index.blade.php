@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($games as $game)
            <div class="card padding">
                <header>
                    <h2>{{$game->videogamename}}</h2>
                </header>
            </div>
        @endforeach

    </div>
@endsection
