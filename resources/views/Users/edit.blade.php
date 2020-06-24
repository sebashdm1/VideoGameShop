@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar un usuario') }}

                    </div>
                    <div class="card-body">
                        @include('Users.form')
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
