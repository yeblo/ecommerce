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
    <button class="btn btn-dark" style="width:100%" href="#popup" data-toggle="modal" data-target="#popup"> CHECKOUT</button>
    </div>
    <div class="text-center py-2">
    <a href="/home" >Continue Shopping</a>
    </div>
    <hr>
</div>


<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Make a Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card">
                    <div>
                        <div class="d-flex pt-3 pl-3">
                            <div><img src="https://img.icons8.com/ios-filled/50/000000/visa.png" width="60"
                                    height="80" /></div>
                            <div class="mt-3 pl-2"><span class="name">Martina Thomas</span>
                                <div><span class="cross">&#10005&#10005&#10005&#10005</span><span
                                        class="pin ml-2">8880</span></div>
                            </div>
                        </div>
                        <div class="py-2 px-3">
                            <div class="first pl-2 d-flex py-2">
                                <div class="form-check"> <input type="radio" name="optradio"
                                        class="form-check-input mt-3 dot" checked> </div>
                                <div class="border-left pl-2"><span class="head">Total amount due</span>
                                    <div><span class="dollar">$</span><span class="amount">{{$subtotal}}</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 px-3">
                            <div class="second pl-2 d-flex py-2">
                                <div class="form-check"> <input type="radio" name="optradio"
                                        class="form-check-input mt-3 dot"> </div>
                                <div class="border-left pl-2"><span class="head">Tips</span>
                                    <div class="d-flex"><span class="dollar">$</span><input type="text" name="text"
                                            class="form-control ml-1" placeholder="0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-3 pt-4 pb-3" style="float:right">
                            <div> <button type="button" class="btn btn-primary button">Pay amount</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div> --}}
            </div>
        </div>
    </div>
@endsection
