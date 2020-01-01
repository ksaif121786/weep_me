@extends('layouts.default')
@section('content')
<style>
	.name{
		margin-left: 150px;
		margin-bottom: -30px;	
		margin-left: 140px;
	}
</style>
<div class="container-fluid">
	<h1 align="center">Inbox</h1>
<div class="row" id="msg">
<!-- 	<div class="col-sm-12 msg_last mt-2">
		<div class="name"><h5>Saif khan</h5></div>
		<div class="col-sm-4 user_profile_pic">
		 <img src="{{asset('public/images/dummy/img1.jpg')}}" style="width: 80px; height: 80px;">
		</div>
		
		<div class="user_send_message float-right">
		<h6 style="margin-left:10px;">Hiii Kaise Ho Bhaii</h6	>	
		</div>
	</div> -->
    
</div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	get_inbox_message();

	function get_inbox_message()
	{
		// alert("ok");
		
		$.ajax({
			   headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
			},
			  url:'<?php echo url('/get_message')?>',
			  method:'POST',
			  dataType:'Json',
			  success:function(response){
               console.log(response);
   
               $.each(response,function(index,value) {
     		 		 
     		 	 $('#msg').append('<a href="#"><div class="col-sm-12 msg_last mt-2"><div class="name"><h5>'+value.name+'</h5></div><div class="col-sm-4 user_profile_pic"><img src="{{asset("public/images")}}/'+value.profile_img+'" style="width: 80px; height: 80px;" class="rounded-circle"></div><div class="user_send_message float-right"><h6 style="margin-left:10px;">'+value.message+'</h6></div></div></a>');
                     
     		 	 });
     		 	 
			  }
			
		});
	}
</script>

@endsection


