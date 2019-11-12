@extends('layouts.default')
@section('content')
<style type="text/css">
	img {
  height: 50px;
  width: 30%;
  margin-left:29px;
 /* background-color: powderblue;*/
}
</style>

<div class="row">
  <div class="col-sm-12" > 
	
		<div class="profile_image mt-3 float-left" >
		      @if(Auth::user()->profile_img)
		<img src="{{asset('public/images/'.Auth::user()->profile_img)}}" class="img-thumbnail" alt="Cinque Terre" width="160" height="120" >
          @else
        <img src="{{asset('public/images/default.png')}}" class="img-thumbnail" alt="Cinque Terre" width="160" height="120">
        @endif
        </div>
    
	  	
	   <!--  <h5 class="mt-5 float-left" style="margin-left:-330px;"><a class="text-dark" href="{{url('/myprofile')}}">My Profile</a></h5> -->
      
	</div>
	
	
</div>
</div>

<div class="container-fluid ml-3">
<div class="functions">
	<hr>
	<h5><i class="fa fa-arrow-right " aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i><a href="#" class="text-dark">Friends<strong>(10/100)</strong></a></h5>
    <hr>
	<h5><i class="fa fa-arrow-right" aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i><a href="{{url('/inbox-chat')}}" class="text-dark">New PMS(0)</a></h5>
    <hr>
	<h5><i class="fa fa-arrow-right" aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i><a href="{{url('/online')}}" class="text-dark">Peeper online<strong>(10,000)</strong></a></h5>
	<hr>
	<h5><i class="fa fa-arrow-right" aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i><a href="{{url('/bigpinboard')}}" class="text-dark">The big pinboard</a></h5>
	<hr>
	<h5><i class="fa fa-arrow-right" aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i><a href="#" class="text-dark">Latest photoblogs</a></h5>
	<hr>
	<h5><i class="fa fa-arrow-right" aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i><a href="#" class="text-dark">P-News: new Feature avail</a></h5>
	<hr>
	<h5><i class="fa fa-arrow-right" aria-hidden="true" style="color:#9CAC0D; width: 40px;"></i><a href="#" class="text-dark">My recent visiters</a></h5>
</div>
</div>

@endsection