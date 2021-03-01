@extends('layouts.app')
@php
    use App\Http\Controllers\ProductController;
    $total = ProductController::cartItem();
@endphp

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class= "text-center">
    <h1 class="for_logo2">Our PAWpies</h1>

    
</div>
<div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $prod)
      
        <div class = "col-lg-4 col-md-6 col-sm-12 p-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style= "height: 200; width: 290;" src="{{asset($prod->gallery)}}" alt="Card image cap">
                <div class="card-body">
                    
                    <h3 class="text-center for_logo2 text-dark"><a href="detail/{{$prod['id']}}">{{$prod->name}}</a></h3>
                        <hr>
                    <p class="card-text text-left">${{$prod->price}} <span title="quick look" style="float: right"> <a href="detail/{{$prod['id']}}" style="color: grey;"><i class="fas fa-eye"></i></a></span></p>
                    {{-- <button class="btn btn-primary">Add to cart</button> --}}
                </div>
              </div>
            </div>
        
@endforeach
    </div>
</div>
@endsection




<div class = "container">
    <div class="row card-deck">
 
</div>
</div>   
