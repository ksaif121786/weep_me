@extends('layouts.default')
@section('content')
<div class="container-fluide">
	<div class="row">
		<div class="col-sm-12 mt-5">
			<div class="message_text_area">
			  <textarea class="form-control" rows="5" id="msg_text"></textarea>
			</div>
			<input type="submit" class="btn btn-primary mt-3" id="post" value="Postnote">&nbsp;&nbsp;&nbsp;
			<a class="btn btn-primary mt-3 text-white" href="{{url('/bigpinboard')}}" id="post">Refresh</a>
	    </div>
	</div>

	<div class="message_post_area mt-5" id="msg">
		@foreach($data as $row)
		<div class="col-sm-12" >
			<div class="card bg-light"  style="margin-left:-10px;">
			<strong><a href="{{url('profile/'.$row->user_id)}}">{{$row->name}}</a></strong>{{$row->msg}}
            </div>
        </div>
		 @endforeach
	</div>
	<h7>{{ $data->links() }}</h7>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('#post').click(function() {
        var msg = $('#msg_text').val();

         $.ajax({
         	 headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
         	      method:'POST',
         	      url:'<?php echo url('/bigpin-msg'); ?>',
         	      data:{msg:msg},
         	      dataType:'Json',
         	      success:function(res){
                  $('#msg').html(res);
                  location.reload();
         	      }
         });
		});

	});
</script>

