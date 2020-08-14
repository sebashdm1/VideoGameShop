@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar un producto') }}
                        <p>{{$product->name}}</p><button><a href="{{route('products.index')}}">atras</a></button>
                    </div>
                    <div class="card-body">
                        @include('products.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
