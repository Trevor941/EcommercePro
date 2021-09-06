@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-sm-10">
           <div class="trending-wrapper">
           <h4>Result for Products</h4>
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
              <button class="btn btn-warning">Remove from Cart</button>

              </div>
               </div>
           @endforeach
           </div>
        </div>
    </div>
</div>
@endsection
