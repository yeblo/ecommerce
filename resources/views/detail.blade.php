
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
                <a class ="btn btn-success" data-toggle="modal" data-target="#popup">Buy Now</a>
                </form>
               
            </div>
            <div class ="col">
                <img class="detail-img" src="{{ asset($products['gallery']) }}" alt="">
            </div>
        </div>
    </div>
    

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
                                    <div><span class="dollar">$</span><span class="amount">{{$products['price']}}</span></div>
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