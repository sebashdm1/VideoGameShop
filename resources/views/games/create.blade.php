@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                         <div class="card-header">{{ __('Agregar Nuevo  video Juego') }}</div>
                            <div class="card-body">
                                @include('games.form')
                            </div>
                     </div>
                 </div>
            </div>
        </div>
@endsection
