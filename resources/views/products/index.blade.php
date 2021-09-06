@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner overlay" style="height:600px;">
  @foreach ($products as $product )
      <div class="carousel-item {{$product['id'] == 1 ?'active':''}}">
      <a href="/detail/{{$product['id']}}">
      <img class="d-block" height="400" src="{{$product['gallery']}}" >
      <div class="carousel-caption d-none d-md-block slider-text">
       <h5>{{$product['name']}}</h5>
        <p>{{$product['description']}}</p>
       </div>
       </a>
   </div>
  @endforeach
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
</div>
<div class="container">
<div class="row my-5">
<h3 class="text-center">Trending Products</h3>
</div>
<div class="row">
@foreach ($products as $product )
<div class="col-md-2">
<a href="/detail/{{$product['id']}}">
<img class="trending-image img-responsive img-fluid" src="{{$product['gallery']}}">
<div class="">
<h6>{{$product['name']}}</h3>
</div>
</a>
</div>
@endforeach

<div>
</div>
@endsection
