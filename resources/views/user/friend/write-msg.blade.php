@extends('layouts.default')
@section('content')
<div class="container mt-5">
	<div class="text_msg">
		<form method="post" action="{{url('send_message_user')}}/{{$user_id}}">
			@csrf
		    <textarea class="form-control" name="message_user_sended" rows="10"></textarea>	
	        <input type="submit" class="btn btn-primary" value="send">
        </form>
	</div>

	
</div>


@endsection