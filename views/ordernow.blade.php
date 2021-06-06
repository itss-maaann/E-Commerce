@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table table-striped">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>{{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Total</td>
                <td>{{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/placeorder" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="paymethod">Payment Method</label><br><br>
                  <input type="radio" value="cash" name="payment"><span> Online Payment</span><br><br>
                  <input type="radio" value="cash" name="payment"><span> PayPal</span><br><br>
                  <input type="radio" value="cash" name="payment"><span> Payment on Delivery</span><br><br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
        
    </div>
</div>
@endsection