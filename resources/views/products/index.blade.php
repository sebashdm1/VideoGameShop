@extends('layouts.app')

@section('content')
    <div class="container productcontainer">
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
                        <div class="figure-img" align="center"><img src="../../storage/images/{{$product->image}}" alt="foto producto" width="100" height="100" ></div>
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
