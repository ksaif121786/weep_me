@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<!-- <div class="row"> -->
		<div class="col-sm-12">
			@foreach($onlinepeep as $res)
			<a href="{{url('profile/'.$res->id)}}">
             <div class="col-sm-2 float-left mt-3">
             <img src="{{asset('public/images/'.$res->profile_img)}}" style="width: 120px; height: 120px;">
             	<div class="caption text-center">{{$res->name}}</div>
             </div>
         </a>
			@endforeach
			
		</div>
		
	<!-- </div> -->
</div>
@endsection