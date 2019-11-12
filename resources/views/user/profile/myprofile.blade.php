@extends('layouts.default')
@section('content')

<div class="container-fluid">
<div class="row">
	<div class="col-sm-6">
		<div class="profile_image mt-3">
      @if(Auth::user()->profile_img)
		<img src="{{asset('public/images/'.Auth::user()->profile_img)}}" class="img-thumbnail" alt="Cinque Terre" width="120" height="100">
    @else

    <img src="{{asset('public/images/default.png')}}" class="img-thumbnail" alt="Cinque Terre" width="160" height="120">
    @endif

    <form method="post" id="formId" enctype="multipart/form-data" action="{{url('/uploadpf')}}">
      @csrf
      <input type="file" id="imgupload" name="img" style="display:none"/> 
    </form>

      <a class="btn btn-success" id="OpenImgUpload" href="#"><i class="fa fa-edit" style="font-size:20px;color:red;"></i></a>
        </div>
	</div>
	<div class="col-sm-6">

		<div class="profile_slogan" style="margin-top: 100px;">
	     <strong>{{(isset(Auth::user()->motto)? Auth::user()->motto:"Hi, i am new here")}}</strong>&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-edit" style="font-size:14px;color:red;">edit</i></a>
        </div>
	</div>
	
</div>
   <!-- Button to Open the Modal -->
	
 <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit" style="font-size:20px;color:red;">edit profile</i></a>
<h4 class="mt-3">Name: {{ucfirst(Auth::user()->name)}}</h4>
<h4>Gender: {{(Auth::user()->gender==1)? "Male" :"Female"}}</h4>
<h4>Age: {{ (isset($userdetails)? $userdetails->dob : '') }}</h4>

<h4>Relationship: {{ (isset($userdetails)? $userdetails->relationship : '') }} </h4>
<h4>languages: {{ (isset($userdetails)? $userdetails->language : '') }}</h4>
<h4>hobbies:{{ (isset($userdetails)? $userdetails->hobbies : '') }}</h4>
<h4>About Me : {{ (isset($userdetails)? $userdetails->myself : '') }}</h4>


<!-- motto edit model -->


<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Your Motto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="{{url('/motto')}}">
          @csrf
       <textarea class="form-control form-control-sm"  name="motto" placeholder="type Your motto here!">{{Auth::user()->motto}}</textarea>
       <input type="submit" class="btn btn-success btn-sm mt-3" name="">
       </form>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>
<!-- motto edit model -->

<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="{{url('/post_profile_data')}}" enctype="multipart/form-data">
            @csrf
  <fieldset>
  
    
    <div class="form-group">
     
      <input type="text" class="form-control form-control-sm" value="{{Auth::user()->name}}" name="name" placeholder="Enter Name">
    </div>

     <div class="form-group">
     <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="form-check-input " name="gender" id="gender" value="1"
      {{(Auth::user()->gender==1)? "checked":''}}
      >Male &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" class="form-check-input " name="gender" id="gender" value="2"
        {{(Auth::user()->gender==2)? "checked":''}}>Female
         <div class="text-danger">{{ $errors->first('gender')}}</div>
      </div>
  
 
    <div class="form-group">
     
    <input type="text" name="age" class="form-control form-control-sm" value="{{Auth::user()->dob}}" placeholder="Enter Your Age">
    </div>
    <div class="form-group">
    
      <select  class="form-control form-control-sm" id="" name="relationship">
 
      	<option value="0">Relationship</option>
        <option {{(Auth::user()->relationship=="Single")? "selected":''}} >Single</option>
        <option {{(Auth::user()->relationship=="Engaged")? "selected":''}}>Engaged</option>
        <option {{(Auth::user()->relationship=="Divorce")? "selected":''}}>Divorce</option>
      </select>
    </div>
     <div class="form-group">
    
      <input type="text" class="form-control form-control-sm" id="" name="language" value="{{Auth::user()->language}}" placeholder="Enter Language">
    </div>
     <div class="form-group">
      
      <input type="text" class="form-control form-control-sm " id="" name="hobbies"  placeholder="Enter Hobbies" value="{{Auth::user()->hobbies}}">
    </div>

     <div class="form-group">
     
      <textarea class="form-control form-control-sm" rows="3" name="myself" placeholder="Enter About Yourself">{{Auth::user()->myself}}</textarea>
    </div>

     <div class="modal-footer">
     	<input type="submit" class="btn btn-success" value="Save">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
  </fieldset>
</form>
        </div>
   
    
        
      </div>
    </div>
  </div>
  

</div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
 $(document).ready(function() {
   $('#OpenImgUpload').click(function(){ 
   
    $('#imgupload').trigger('click');
     });
 });

  $(document).ready(function() {
   $("#imgupload").on("change", function() {
    $("#formId").submit();
});
 });



</script>

