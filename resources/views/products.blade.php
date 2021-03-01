@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('images/img7.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/img5.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/img6.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $prod)
      
        <div class = "col-lg-4 col-md-6 col-sm-12 p-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style= "height: 200; width: 290;" src="{{asset($prod->gallery)}}" alt="Card image cap">
                <div class="card-body">
                    
                    <h3 class="text-center"><a href="detail/{{$prod->id}}">{{$prod->name}}</a></h3>
                        <hr>
                    <p class="card-text text-center">${{$prod->price}}</p>
                    {{-- <button class="btn btn-primary">Add to cart</button> --}}
                </div>
              </div>
            </div>
        
@endforeach
    </div>
</div>
@endsection
