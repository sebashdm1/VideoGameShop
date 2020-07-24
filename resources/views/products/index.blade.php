@extends('layouts.app')

@section('content')
    <div class="container">

            <products-component
             :products-values="{{$products}}"
            ></products-component>

        <div class="actions text-center">
            {{$products->links()}}
        </div>
    </div>
@endsection
