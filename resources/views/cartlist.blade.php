@extends('layouts.app')
@php
    use App\Http\Controllers\ProductController;
    $total = ProductController::cartItem();
    $subtotal = ProductController::totalOrder();
@endphp

@section('content')
<div class= "container text-center">
    <h3 class=""> Orders</h3>

    <hr>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-8 col-lg-8">
            <hr>
        @foreach ($products as $prod)
        <ul class="line">
            <li class="">
                <img class="card-img-top py-2" style= "height: 50% ; width: 70%;" src="{{asset($prod->gallery)}}" alt="Card image cap">
                
            </li>
            <li>
                <p  >{{$prod->name}}</p>
            </li>
            <li class="">
                <input type="text"  style= "width: 25px;" placeholder="{{$total}}" readonly>
            </li>
            <li class="">
                <p class="card-text text-left">${{$prod->price}}</p>
            </li>
            <li>  <a href="/removecart/{{$prod->cart_id}}" class="btn btn-danger">remove</a></li>
        </ul>
        {{-- <div class = "col-lg-4 col-md-6 col-sm-12 p-3">
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" style= "height: 200; width: 290;" src="{{asset($prod->gallery)}}" alt="Card image cap">
                <div class="card-body">    
                    <h3 class="text-center for_logo2 text-dark"><a href="detail/{{$prod->id}}">{{$prod->name}}</a></h3>
                        <hr>
                    <p class="card-text text-left">${{$prod->price}} <span title="quick look" style="float: right"> <a href="detail/{{$prod->id}}" style="color: grey;"><i class="fas fa-eye"></i></a></span></p>
                    {{-- <button class="btn btn-primary">Add to cart</button> 
                </div>
              </div>
            </div>
         --}}
@endforeach
<hr>
</div>
<div class="col-md-4 col-lg-4 py-4">
    <hr>
    <div>
        <p>Subtotal <span style="float:right">${{$subtotal}}</span></p>
    </div>
    <div class="text-center" >
    <a class="btn btn-dark" style="width:100%"> CHECKOUT</a>
    </div>
    <div class="text-center py-2">
    <a href="/home" >Continue Shopping</a>
    </div>
    <hr>
</div>
@endsection
