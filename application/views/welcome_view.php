
<!-------------------------------------->

<div class="container-fluid" style="background-color:#ffffcc; height:600px; ">

<div class=" d-flex justify-content-center">
<div class="col-sm-4 card p-3 bg-light " style="margin-top:20px">

 <?php  if($this->session->flashdata('error')) { ?>
  <p align="center" style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
   
<?php }; ?>

  <p align="center" style="color:red;"><?php echo $this->session->flashdata('message'); ?></p>



<?php echo form_open('user/Login');?>
  <fieldset>
    <legend class="text-danger text-center"><?php echo $title ?></legend>
    
    <div class="form-group row">
      <label for="staticEmail"  ></label>
      <div class="col-sm-10" >
        <input type="text" readonly=""  class="form-control-plaintext" name="eerror" id="staticEmail" value="email@example.com">

      </div>
    </div>

      

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php echo form_error('email',"<div style='color:red'>","</div>");?>
    </div>


   
    <div class="form-group">
      <label >Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
   <?php echo form_error('password',"<div style='color:red'>","</div>");?>
    </div>
 
    <input type="submit" class="btn btn-primary" name="submit" value="submit">
    &nbsp; &nbsp; &nbsp; <a href="<?php echo base_url('user/Register')?>">Register A New User</a>
  </fieldset>
<?php echo form_close();?>
</div>
</div>
</center>
</div>







