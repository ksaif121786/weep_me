@extends('layouts.default')
@section('content')


<div class="container-fluid">
    <!-- <img src="{{URL::asset('/images/main.jpg')}}" class="background_img" width="100%" height="auto"> -->
<div class="row d-flex justify-content-center mt-3" >
<div class="col-sm-4">
  @if(Session::has('success'))
       <div class ="alert alert-success">
        {{ Session::get('success')}}
      </div>
      @endif

<form method="post" action="{{ url('/login')
}}">
@csrf
  <fieldset>
    <legend>Login!!</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="" name="email" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <div class="text-danger">{{ $errors->first('email')}}</div>
    </div>
    <div class="form-group">
      <label for="">Password</label>
      <input type="password" class="form-control" id="" name="password" placeholder="Password">
      <div class="text-danger">{{ $errors->first('password')}}</div>
    </div>
  
   
    <input type="submit" class="btn btn-primary" name=""><a href="{{url('register')}}" class="float-right">Create an Account</a>
  </fieldset>
</form>
		
	</div>
</div>

</div>
<a href="#" class="d-flex justify-content-center">Forget Password</a>

@endsection