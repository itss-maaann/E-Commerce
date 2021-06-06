@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div class="col-sm-4 col-sm-6">
            <img class="detail-img" src="{{$details['gallery']}}" alt="">
        </div>

        <div class="col-sm-4 col-sm-6">
            <a href="/">Go Back</a>
            <h2 class="detail-data">{{$details['name']}}</h2>
            <h3 class="detail-data">Price: {{$details['price']}}</h3>
            <h4 class="detail-data">Details: {{$details['description']}}</h4>
            <h4 class="detail-data">Category: {{$details['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$details['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            </div>
    </div>
</div>
@endsection