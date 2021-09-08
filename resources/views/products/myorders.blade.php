@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-sm-10">
           <div class="trending-wrapper">
           <h4>My Orders</h4>
           <hr>
           @foreach ($myorders as $order )
               <div class ="row searched-item">
              <div class="col-sm-4">
                  <img class="trending-image" width="150" src="{{$order->gallery}}">
              </div>
              <div class="col-sm-8">
              <div>
               <h2>Name: {{$order->name}}</h2>
               <h5>Delivery Status: {{$order->status}}</h5>
               <h5>Address: {{$order->address}}</h5>
               <h5>Payment Status: {{$order->payment_status}}</h5>
               <h5>Payment Method: {{$order->payment_method}}</h5>
               </div>
               <hr>
              </div>
              
               </div>
           @endforeach
           </div>
        </div>
    </div>
</div>
@endsection
