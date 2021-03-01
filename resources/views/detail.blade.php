
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class ="col text-center">
                <div class="text-left">
                <a href="/home"> Go Back </a>
                </div>
                <h1 class="py-4 for_logo2">{{$products['name']}}</h1>
                <h3>$ {{$products['price']}}</h3>
                <div class="text-left py-4">
                <p> {{$products['description']}}</p>
                </div>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value = {{$products['id']}}>
                <button class ="btn btn-primary">Add to Cart</button>
                <button class ="btn btn-success">Buy Now</button>
                </form>
               
            </div>
            <div class ="col">
                <img class="detail-img" src="{{ asset($products['gallery']) }}" alt="">
            </div>
        </div>
    </div>
@endsection