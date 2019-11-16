@extends('layouts.default')
@section('content')
<style type="text/css">
	 .border {
    display: inline-block;
    width: 100%;
    height: 85px;
    margin: 6px;
    margin-left: 0px;
  }

  .border1 {
  	margin-left: 220px;
  }

</style>
<div class="container-fluid">
	<div class="row col-sm-12 chating_list mt-5 ml-5" >
	<div class="col-sm-2 bg-" height="100%">
	<h5 class="bg-warning "><a href="#" class="text-white">Inbox</a></h5>
	<h5 class="bg-warning "><a href="#" class="text-white">Outbox</a></h5>
	<h5 class="bg-warning "><a href="#" class="text-white">Conversation</a></h5>
	</div>
	
	


	<!-- <h6 class="border border-dark" style="width:100%; height:50px;overflow:hidden;">Hi howdddddddddddddddddddddddddddddddddddddddfddddddddddddddddddddddddddddddddddddddddddddghdfhhfhfhfhfhhffh are you man</h6> -->
	<!-- <div class="row"> -->
 	<div class="col-sm-1  user_img" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-7 border  user_msg">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>

	<div class="col-sm-1 border1 user_img" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-7 border  user_msg">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>

	<div class="col-sm-1 border1 user_img" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-7 border  user_msg">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>

	<div class="col-sm-1 border1 user_img" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-7 border  user_msg">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>

	<div class="col-sm-1 border1 user_img" >
       <img width="80"  class="rounded-circle" height="80" src="{{asset('public/images/default.png')}}">		
	</div>
	<div class="col-sm-7 border  user_msg">
		<div>
			Hey! Hello How Are You Man. i need a friend who can chat me and make my whole day perfect.
		</div>
	</div>



	
</div>

</div>


@endsection