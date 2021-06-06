@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrappers">
            <h4>You have added these Products to Cart: </h4>
            <a class="btn btn-success" href="ordernow">Order Now</a>
            @foreach ($products as $product)     
        <div class="row search-item cart-list-setting">
           <div class="col-sm-3">
                <img class="trending-img" src="{{$product->gallery}}">
           </div>

           <div class="col-sm-4">
                <div class="">
                  <h2>{{$product->name}}</h2>
                  <h5>{{$product->description}}</h5>
                </div>
           </div>

           <div class="col-sm-3">
            <a href="remove_from_cart/{{$product->cart_id}}"><button class="btn btn-warning">Remove From Cart</button></a>
        </div>
    </div>
        @endforeach
    </div>
    </div>
</div>
@endsection