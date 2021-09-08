@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-sm-10">
           <table class="table table striped">
               <tbody>
                   <tr>
                       <td>Amount</td>
                       <td>$ {{$total}}</td>
                   </tr>
                   <tr>
                    <td>Tax</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td> $ {{$total}}</td>
                </tr>
               </tbody>
           </table>
           <form action="/orderplace" method="POST">
            @csrf
               <div class="form-group">
                   <textarea class="form-control" name="address">Enter Your Address</textarea>
               </div>
               <div class="form-group">
                <label>Payment Method</label><br><br>
                <input type="radio" value="Online Payment" name="payment"/><span>Online Payment</span><br><br>
                <input type="radio"  value="EMI Payment" name="payment"/><span>EMI Payment</span><br><br>
                <input type="radio" value="Payment on Delivery" name="payment"/><span>Payment on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
           </form>
        </div>
    </div>
</div>
@endsection
