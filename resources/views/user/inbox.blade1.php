@extends('layouts.default')
@section('content')

<div class="container-fluid">
	<div class="row">
	<div class="col-md-   col-sm-12  chating_list mt-5 ml-5" >
		<div class="col-sm-2 slide-box" >
			<h5 class="bg-warning "><a href="#" class="text-white" data-toggle="collapse" data-target='#friend_request'>Inbox</a></h5>
			<h5 class="bg-warning "><a href="#" class="text-white">Outbox</a></h5>
			<h5 class="bg-warning "><a href="#" class="text-white" data-toggle="" data-target="">Friend Requests(10)</a></h5>
	    </div>
	
	
 <!-- <h6 class="border border-dark" style="width:600px; height:50px;overflow:hidden;">Hi howare you man</h6> -->
	<!-- <div class="row"> -->
  <div class="col-sm-10 collapse msg-box" id="friend_request">
 	<div class="col-sm-1.9 float-left" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-8 border float-left ml-2">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>
</div>

<!-- <div class="col-sm-10  collapse msg-box" id="friend_request">
 	<div class="col-sm-1.9 float-left" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-8 border float-left ml-2">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>
</div>

<div class="col-sm-10 collapse msg-box" id="friend_request">
 	<div class="col-sm-1.9 float-left" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-8 border float-left ml-2">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>
</div> -->

	
</div>
</div>
</div>



  


@endsection


