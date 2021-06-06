@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrappers">
            <h4>You have selected these Products: </h4>
            @foreach ($products as $product)     
        <div class="row search-item cart-list-setting">
           <div class="col-sm-3">
                <img class="trending-img" src="{{$product->gallery}}">
           </div>

           <div class="col-sm-4">
                <div class="">
                  <h2><strong>Name: </strong>{{$product->name}}</h2>
                  <h5><strong>Description: </strong>{{$product->description}}</h5>
                  <h5><strong>Status: </strong>{{$product->status}}</h5>
                  <h5><strong>Payment Method: </strong>{{$product->payment_method}}</h5>
                  <h5><strong>Payment Status: </strong>{{$product->payment_status}}</h5>
                  <h5><strong>Address: </strong>{{$product->address}}</h5>
                </div>
           </div>
    </div>
        @endforeach
    </div>
    </div>
</div>
@endsection