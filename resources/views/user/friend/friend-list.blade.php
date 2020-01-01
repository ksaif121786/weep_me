@extends('layouts.default')
@section('content')
<style type="text/css">
	.friend_list{
		      /*background-color: yellow;*/
		      /*min-height: 540px;*/
	}
	.friend{
		   /*background-color: red;
		   /*height: 70px;
		   width: 300px;
		   border: 2px solid;
	}*/
*/	
</style>
<h3>Friend list</h3>
<div class="container-fluid">
	<div class="row">

		@if(!empty($friends))
		<div class="col-sm-5 friend_list mt-5" height="">

         @foreach($friends as $row)
		<i class="fa fa-circle" aria-hidden="true" style="color:#70F75B;"></i>&nbsp;&nbsp;<span class="h5"><a href="{{url('profile')}}/{{$row[0]->id}}">{{$row[0]->name}}</a></span><br>
		@endforeach
        </div>
		@endif
	</div>
</div>
@endsection