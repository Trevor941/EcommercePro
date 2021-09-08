@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-sm-10">
           <div class="trending-wrapper">
           <h4>Cart List</h4>
           <a href="ordernow" class="btn btn-success">Order Now</a>
           <hr>
           @foreach ($products as $product )
               <div class ="row searched-item">
              <div class="col-sm-4">
                  <img class="trending-image" width="150" src="{{$product->gallery}}">
              </div>
              <div class="col-sm-4">
              <div>
               <h2>{{$product->name}}</h2>
               <h5>{{$product->description}}</h5>
               </div>
              </div>
              <div class="col-sm-4">
              <a href="/removecart/{{$product->cart_id}}" class="btn btn-warning">Remove from Cart</a>

              </div>
               </div>
           @endforeach
           </div>
        </div>
    </div>
</div>
@endsection
