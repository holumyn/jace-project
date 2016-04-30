<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	 <link rel="icon" href="<?php echo base_url(); ?>img/jace_logo.jpg" type="image/gif" sizes="16x16"> 
	
	<!-- social icon script -->
	<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-8d0c9235-27a2-8541-b35a-14aead123a91", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>

	<title><?php echo $title; ?></title>
	
	
	
</head>
<body>
<!--Navigation -->
<nav class="navbar navbar-inverse main-nav1">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav nav1">
        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +234 (0)807 463 1387</a></li>
        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> info@jacetechnologies.com.ng</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right nav1">
	     <li><a href="#readme"><span class="glyphicon glyphicon-book"></span> ReadMe</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-inverse main-nav2">
  <div class="container-fluid">
    <div class="navbar-header">
		<!-- Smaller screen icon -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <a href="<?php echo base_url(); ?>">
	  <img src="<?php echo base_url(); ?>img/jace_tech.png" class="logo">
	  </a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navi">
        <li class="active-menu"><?php echo anchor(''.base_url().'','Home') ?></li>
        <li><?php echo anchor('home/about','About') ?></li>
        <li><?php echo anchor('home/contact','Contact') ?></li>
      </ul>
      
	  <ul class="nav navbar-nav navbar-right navi-right">
        <?php if($this->session->has_userdata('user_id')){ ?>
		<li><?php echo anchor('home/profile','&nbsp;Profile','class="glyphicon glyphicon-user"') ?></li>
		<li><?php echo anchor('home/logout','&nbsp;Logout','class="glyphicon glyphicon-log-out"') ?></li>
	<?php }else{ ?>
	<li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	<?php } ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 before-slider">
		</div>
	</div>
</div>

<!--Sign up form modal --->
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="text-align:center;background-color:#ff6600;color:#fff;">
          
          <h3 class="modal-title">Signup</h3>
        </div>
        <div class="modal-body">
          <p>
			<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
			<?php echo form_open('home/register','class="form-horizontal" role="form"'); ?>
			
				<div class="form-group">
				<div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
				  <div class="input-group">
					<span class="input-group-addon" id="name"><span class="glyphicon glyphicon-user"></span></span>
					<?php echo form_input('name',set_value('name'),'class="form-control" placeholder="Enter Name" aria-describedby="name" required'); ?>
				  </div>
				  </div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-2">
				  </div>
				  <div class="col-sm-8"> 

					<div class="input-group">
					<span class="input-group-addon" id="username"><span class="glyphicon glyphicon-eye-open"></span></span>				  
					<?php echo form_input('username',set_value('username'),'class="form-control" placeholder="Enter Username" aria-describedby="username" required'); ?>
				  </div>
				  </div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
				  <div class="input-group">
					<span class="input-group-addon" id="phone"><span class="glyphicon glyphicon-phone"></span></span>
					<?php echo form_input('phone',set_value('phone'),'class="form-control" placeholder="Enter Phone" aria-describedby="phone" required'); ?>
				  </div>
				</div>
				</div>
				
				<div class="form-group">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
				  <div class="input-group">
					<span class="input-group-addon" id="email"><span class="glyphicon glyphicon-envelope"></span></span>
				    <?php echo form_input('email',set_value('email'),'class="form-control" placeholder="Enter Email" aria-describedby="email" required'); ?>
					</div>
				</div>
				</div>
				
				
				<input type="hidden" name="password" value="password">
				
				<div class="form-group">
					<div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
					<?php echo form_submit('submit','Create Account','class="btn" style="text-align:center;background-color:#ff6600;color:#fff;width:100%;"'); ?>
					
				  </div>
				</div>
			  <?php echo form_close(); ?>
		  </p>
        </div>
        
      </div>
      
    </div>
  </div>
  
  <!--login up form modal --->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="text-align:center;background-color:#ff6600;color:#fff;">
          
          <h3 class="modal-title" >Login</h3>
        </div>
        <div class="modal-body">
          <p>
			<?php if(isset($login_msg)){ 
				echo $login_msg;
			 } ?>
			 
			 
			<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
			
			<?php echo form_open('home/login','class="form-horizontal" role="form"'); ?>
			
				<div class="form-group">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
				    <div class="input-group">
					<span class="input-group-addon" id="name"><span class="glyphicon glyphicon-user"></span></span>
					<?php echo form_input('logintype',set_value('name'),'class="form-control" placeholder="Enter Email or Username" aria-describedby="name" required'); ?>
					</div>
				  </div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-2">
				  </div>
				  <div class="col-sm-8"> 
					<div class="input-group">
					<span class="input-group-addon" id="password"><span class="glyphicon glyphicon-lock"></span></span>				  
					<?php echo form_password('password','','class="form-control" placeholder="Enter Password" aria-describedby="password" required'); ?>
				  </div>
				  </div>
				</div>
				
				<div class="form-group">       
				<div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
				  
				  <?php echo form_submit('submit','Login','class="btn" style="text-align:center;background-color:#ff6600;color:#fff;width:100%;"'); ?>
					</div>
				</div>
				
				<div class="form-group">  
					<div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
				    <div class="col-sm-6">
					<div class="checkbox" style="text-align:left;">
					  <label>
					    <?php echo form_checkbox('remember', 'accept'); ?>
						Remember me
					  </label>
					</div>
					</div>
					<div class="col-sm-6" style="text-align:right">
					<a href="#" style="margin:5px 0;">Forgot Password?</a>
					</div>
				  </div>
				</div>
			  <?php echo form_close(); ?>
			 
			  
		  </p>
        </div>
        
      </div>
      
    </div>
  </div>