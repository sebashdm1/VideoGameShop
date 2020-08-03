@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card padding">
                        <header>
                            <h2 class = "card-title">
                                <a href="/products/{{$product->id}}"> {{$product->name}}</a>
                            </h2>
                            <h4 class="card-subtitle">{{$product->price}}</h4>
                        </header>
                        <div class="card-img"><img src="../../storage/images/{{$product->image}}" alt="foto producto"></div>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="actions text-center">
            {{$products->links()}}
        </div>
    </div>
@endsection
