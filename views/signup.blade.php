@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="sign_up" method="POST">

                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                @csrf
                <div class="form-group">
                    <label for="exampleInputUserName">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputUserName" placeholder="Enter Your name">
                    <span style="color: red">@error('name'){{$message}}@enderror</span>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                  <span style="color: red">@error('email'){{$errors}}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                  <span style="color: red">@error('password'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Re-type Password">
                    <span style="color: red">@error('confirm_password'){{$message}}@enderror</span>
                  </div>
                
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </form>
                    
        </div>
    </div>
</div>
@endsection
