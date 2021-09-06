@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
           <a href="#">Filter</a>
        </div>
         <div class="col-sm-4">
           <div class="trending-wrapper">
           <h4>Result for Products</h4>
           @foreach ($searchResult as $product )
               <div class ="searched-item">
               <a href="detail/{{$product['id']}}">
               <img class="trending-image" src="{{$product['gallery']}}">
               <div>
               <h2>{{$product['name']}}</h2>
               <h5>{{$product['description']}}</h5>
               </div>
               </a>
               </div>
           @endforeach
           </div>
        </div>
    </div>
</div>
@endsection
