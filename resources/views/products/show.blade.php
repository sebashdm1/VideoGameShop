
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h5>{{ $product->name }}</h5>
                        <button><a href="{{route('products.index')}}">atras</a></button>
                    </div>
                    <div class="card-body">
                        <div class="card-img">
                            <img src="../../storage/images/{{$product->image}}" alt="foto producto">
                        </div><br>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>{{ __('Descripcion del producto: ') }}{{ $product->description }}</h6>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <p> {{ __('Precio: ') }}{{ $product->price}}</p>
                            </div>
                            <div class="col-md-2">
                                <h6>{{ __('Stock: ') }} {{ $product->stock }}</h6>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <h6>{{ __('Estado: ') }} @if($product->isBlocked == 0)
                                        {{ __('Disponible') }}
                                    @else
                                        {{ __('Agotado') }}
                                    @endif</h6>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="btn btn-success" type="button" name="button">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
