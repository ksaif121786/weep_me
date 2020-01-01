@extends('layouts.default')
@section('content')
<div class="container-fluid">
  @if(Session::has('success'))
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <p class="alert alert-success alert-block">{{Session::get('success')}} Check in <a href="#">Outbox</a></p>
    </div>
    
  </div>
  
  @endif
<div class="row">
	<div class="col-sm-6">
		<div class="profile_image mt-3">
		    @if($user->profile_img)
    <img src="{{asset('public/images/'.$user->profile_img)}}" class="img-thumbnail" alt="Cinque Terre" style="width: 120px; height: 120px;" >
    @else

    <img src="{{asset('public/images/default.png')}}" class="img-thumbnail" alt="Cinque Terre" style="width: 120px;  height: 120px;">
    @endif
        </div>
	</div>
	<div class="col-sm-6">

		<div class="profile_slogan">
	       <strong>{{(isset($user->motto)? $user->motto:"Hi, i am new here")}}</strong>
        </div>
	</div>
	
</div>
   <!-- Button to Open the Modal -->
    @if(Auth::id()!=$user->id)


         @if($reqstatus[0]['status']==0)
         <a href="#" class="btn btn-success mt-2" id="request_send" data-userid="{{$user->id}}" data-send="4">Send Friend Request</a>
        
         @endif

         @if($reqstatus[0]['status']==4)
           <a href="#" class="btn btn-success mt-2" id="request_cancel" data-userid="{{$user->id}}" data-cancel="0">Cancel Friend Request</a>
         @endif


     @endif
    <!--  <input type="hidden" id="fstatus" value="{{(isset($reqstatus[0]['status']))? $reqstatus[0]['status']: 0}}"> -->
   <a href="{{url('send-message')}}/{{$user->id}}" class="btn btn-success mt-2" id="send_message">Send Message</a>
  


<h4 class="mt-3"><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i>Name: {{ucfirst($user->name)}}</h4>
<h4><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i>Gender: {{($user->gender==1)? "Male" :"Female"}}</h4>
<h4><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i>Age: {{$user->dob}}</h4>
<h4><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i>Relationship: {{ $user->relationship }} </h4>
<h4><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i>languages: {{ $user->language}}</h4>
<h4><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i>hobbies:{{  $user->hobbies}}</h4>
<h4><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i>About Me : {{$user->myself}}</h4>
<input type="hidden" id="requesterId" value="{{Auth::id()}}">

<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
  	$('#request_send').click(function() {
  		var requesteeId = $(this).data("userid");
      var requesterId =$('#requesterId').val();
      var reqid =$('#reqid').val();
       var status =  $(this).data('send');
      alert(status);
  	
     console.log(status);
      $.ajax({
         headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
              method:'POST',
              url:'<?php echo url('/friendrequest')?>',
              dataType:'JSON',
              data:{requesteeId:requesteeId,requesterId:requesterId,status:status,reqid:reqid},
              success:function(res){
               // console.log(res);
                location.reload();

              }

      });
    });
});
</script>


<script>
  $(document).ready(function(){
    $('#request_cancel').click(function() {
      var requesteeId = $(this).data("userid");
      var requesterId =$('#requesterId').val();
       // var send =  $(this).data('send');
       var status =$(this).data('cancel');
      alert(status);
    
     // console.log(status);
      $.ajax({
         headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
              method:'POST',
              url:'<?php echo url('/friendrequest')?>',
              dataType:'JSON',
              data:{requesteeId:requesteeId,requesterId:requesterId,status:status},
              success:function(res){
               // console.log(res);
               location.reload();
              }

      });
    });
});
</script>
