@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card padding">
                        <header>
                            <h2 class = "card-title">{{$product->name}}</h2>
                            <h4 class="card-subtitle">{{$product->price}}</h4>
                        </header>
                        <div class="card-img"> {{$product->image}}</div>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="actions">
            {{$products->links()}}

        </div>
    </div>
@endsection
