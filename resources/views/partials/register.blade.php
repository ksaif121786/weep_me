@extends('layouts.default')
@section('content')
<div class="container-fluid">
  <div class="row d-flex justify-content-center mt-3">
    <div class="col-sm-4">
      @if($errors->has('success'))
       <div class = "alert alert-danger">
        {{ $errors->first('success')}}
      </div>
      @endif
      <form method="post" action="{{url('/post-data')}}">
        @csrf
  <fieldset>
    <legend>Register Free</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">

      </div>
    </div>
     <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
       <div class="text-danger">{{ $errors->first('name')}}</div>
    </div>

     <div class="form-group">
     <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="form-check-input" name="gender" id="" value="1">Male &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" class="form-check-input" name="gender" id="" value="2">Female
         <div class="text-danger">{{ $errors->first('gender')}}</div>
      </div>

    <div class="form-group">
      <label for="">Email address</label>
      <input type="email" class="form-control" id="" name="email" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
       <div class="text-danger">{{ $errors->first('email')}}</div>
    </div>

    <div class="form-group">
      <label for="">Password</label>
      <input type="password" class="form-control" id="" name="password" placeholder="Password">
       <div class="text-danger">{{ $errors->first('password')}}</div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button><a href="{{url('register')}}" class="float-right">I Have Already Account</a>
  </fieldset>
</form>
    </div>
  </div>
  
</div>
@endsection