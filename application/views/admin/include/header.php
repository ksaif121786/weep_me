<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title ?></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
</head>
<body>

<!-- <div class="container"> -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">PEEP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/admin/authentication');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Pricing</a>
      </li>
      
    </ul>

    <!-- right navbar start -->
     <ul class="navbar-nav ml-auto">
     <?php if($this->session->userdata('type')) { ?>
       <li class="nav-item">
         <a class="nav-link " href="<?php echo base_url('admin/Admin/logout');?>">Logout</a>
      </li>
     <?php } else {?>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('user/Login');?>">Login</a>
      </li>
    <?php }?>
    </ul>
     <!-- right navbar end -->

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</div>

</nav>