<!DOCTYPE html>
<html>
<head>

	<title>Peep</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/core.css')}}">


</head>
<body>
<div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      @if(Auth::check())
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/dashboard')}}"><i class="far fa-arrow-alt-right" ></i>Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active" >
        <a class="nav-link" href="{{url('/myprofile')}}">My Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
      @else 
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active" >
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
      @endif

     

    @if(Auth::user())
     <ul class="navbar-nav ml-auto">
     
     <!--  <li class="nav-item active">
        <a class="nav-link" href="#"></a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/logout')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
      </li>
    </ul>
    @endif


   
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
</div>





