
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h5>{{ $product->name }}</h5>

                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <h6>{{ __('Descripcion del producto: ') }}</h6>
                            <div class="col-md-8">
                                {{ $product->description }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6>{{ __('Precio: ') }}</h6>
                            <div class="col-md-8">
                                {{ $product->price}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6>{{ __('Cantidad en stock: ') }}</h6>
                            <div class="col-md-8">
                                {{ $product->stock }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6>{{ __('Estado: ') }}</h6>
                            <div class="col-md-8">
                                @if($product->isBlocked == 0)
                                    <h6>Disponible</h6>
                                @else
                                    <h6>Agotado</h6>
                                @endif
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
