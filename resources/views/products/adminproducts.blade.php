@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Gestion de productos') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Nombre producto</th>
                                <th>fecha de creacion</th>
                                <th>Categoria</th>
                                <th>precio</th>
                                <th>Estado</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>

                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td></td>
                                    <td>{{$product->price}}</td>
                                    @if($product->isBlocked == 0)
                                        <td>Disponible</td>
                                    @else
                                        <td>Agotado</td>
                                    @endif
                                    <td>{{$product->stock}}</td>
                                    <td><a class="btn btn-warning float-left" href="/products/{{$product->id}}">Ver</a><a class="btn btn-primary float-left" href="/products/{{$product->id}}/edit">Editar</a>@include('products.delete')</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
