
<div class="container-fluid " style="background-color:#ffffcc; height:600px; ">

<!-- d-flex justify-content-center -->
<div class="d-flex justify-content-center" >
<div class="col-sm-4 card p-3 bg-light" style="margin-top: 20px;">
<?php if($this->session->flashdata("message")) 
{
     echo $this->session->userdata('message');
      };?>
<?php echo form_open('user/register');?>
  <fieldset>
    <legend class="text-danger text-center"><?php echo $title ?></legend>
    
 <!--    <div class="form-group row">
      <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
      <div class="">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div> -->

     <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo set_value('username');?>">
      <?php echo form_error('username',"<div style='color:red'>","</div>");?>
    </div>

       <div class="form-group">
      <label >Password</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="Password"  value="<?php echo set_value('password');?>">
       <?php echo form_error('password',"<div style='color:red'>","</div>");?>
    </div>

    <div class="form-group">
      <label >Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"  value="<?php echo set_value('email');?>">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php echo form_error('email',"<div style='color:red'>","</div>");?>
    </div>

      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="male" >Male
       </label>
      </div>
      <div class="form-check ">
      	<label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="female">Female
       </label>
       <?php echo form_error('gender',"<div style='color:red'>","</div>");?>
      </div>

    <!--  <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div> -->
     <br>
    <input type="submit"  class="btn btn-primary " name="s" value="submit">
    &nbsp; &nbsp; &nbsp; <a href="<?php echo base_url('user/login')?>">Already a User</a>
  </fieldset>
<?php echo form_close();?>
</div>
</div>
</div>












