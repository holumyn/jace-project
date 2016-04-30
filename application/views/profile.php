<?php require_once('header.php'); ?>

<div class="container">
	<div class="row profile">
		<div class="col-sm-4">
			 <img src="<?php echo base_url() ?>img/pics.png" class="img-thumbnail" alt="profile Picture" width="100%" height="236">
			  <div class="list-group" id="profile-list">
				  <a href="#" class="list-group-item" style="background-color:#ff6600;color:#fff;">Basic Details</a>
				  <a href="#" class="list-group-item">Projects</a>
				  <a href="#" class="list-group-item">Settings</a>
</div>
		</div>
		<div class="col-sm-8">
		<?php if($this->session->set_flashdata('message')){ ?>
		<h2><?php echo $this->session->flashdata('message'); ?></h2>
	<?php } ?>
	      
		     
			<?php 
			//if($this->session->has_userdata('user_id')){ ?>
		<?php //echo $this->session->userdata('user_id'); ?>
	<?php // } ?>
	<?php if($profile->password == md5(sha1('password'))){?>
	<div class="alert alert-danger fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Attention!</strong> Your password isn't secure, please update.
				</div>
	<?php } ?>
		<?php if(isset($profile)){ ?>
			<form class="form" role="form">
			
			<div class="form-group">
				<label class="control-label">Name</label>
				<div class="input-group">
					<span class="input-group-addon" id="name"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" class="form-control" value="<?php echo $profile->name; ?>" aria-describedby="name" id="disabledInput" disabled>
					<span class="input-group-addon" id="name"><a href="#" data-toggle="modal" data-target="#update-name" data-placement="bottom" title="Edit name"><span class="glyphicon glyphicon-edit"></span></a></span>
				</div>
			</div>
						
			
			
			<div class="form-group">
				<label class="control-label">Username</label>
				<div class="input-group">
					<span class="input-group-addon" id="username"><span class="glyphicon glyphicon-eye-open"></span></span>
					<input type="text" class="form-control" value="<?php echo $profile->username; ?>" aria-describedby="username" id="disabledInput" disabled>
					<span class="input-group-addon" id="username"><span class="glyphicon glyphicon-ok" data-placement="bottom" title="Uneditable"></span></span>
				</div>
			</div>
			
			
			
			<div class="form-group">
				<label class="control-label">Phone</label>
				<div class="input-group">
					<span class="input-group-addon" id="phone"><span class="glyphicon glyphicon-phone"></span></span>
					<input type="text" class="form-control" value="<?php echo $profile->phone; ?>" aria-describedby="phone" id="disabledInput" disabled>
					<span class="input-group-addon" id="phone"><a href="#" data-toggle="modal" data-target="#update-phone" data-placement="bottom" title="Edit Phone"><span class="glyphicon glyphicon-edit"></span></a></span>
				</div>
			</div>
						
			
			
			<div class="form-group">
				<label class="control-label">Email</label>
				<div class="input-group">
					<span class="input-group-addon" id="email"><span class="glyphicon glyphicon-envelope"></span></span>
					<input type="text" class="form-control" value="<?php echo $profile->email; ?>" aria-describedby="email" id="disabledInput" disabled>
					<span class="input-group-addon" id="email"><a href="#" data-toggle="modal" data-target="#update-email" data-placement="bottom" title="Edit Email"><span class="glyphicon glyphicon-edit"></span></a></span>
					
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label">Password</label>
				
				<div class="input-group">
					<span class="input-group-addon" id="password"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="password" class="form-control" value="<?php echo $profile->password; ?>" aria-describedby="password" id="disabledInput" disabled>
					<span class="input-group-addon" id="password"><a href="#" data-toggle="modal" data-target="#update-password" data-placement="bottom" title="Edit Password"><span class="glyphicon glyphicon-edit"></span></a></span>
				</div>
				
			</div>
			
			</form>
		<?php }else{
			
			redirect(''.base_url().'');
		} ?>

		</div>
	</div>
</div>


<!--update name form modal --->
  <div class="modal fade" id="update-name" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Name</h4>
        </div>
        <div class="modal-body">
          <p>
			<?php echo validation_errors(); ?>
			<?php echo form_open('home/update/name','class="form-horizontal" role="form"'); ?>
			
				<div class="form-group">
				  <div class="col-sm-8">
				    <?php echo form_input('name',''.$profile->name.'','class="form-control" required'); ?>
					
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-8">
				  <?php echo form_submit('submit','Update','class="btn btn-default"'); ?>
					</div>
				</div>
			  <?php echo form_close(); ?>
		  </p>
        </div>
        
      </div>
      
    </div>
  </div>
  
  <!--update phone form modal --->
  <div class="modal fade" id="update-phone" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Phone</h4>
        </div>
        <div class="modal-body">
          <p>
			<?php echo validation_errors(); ?>
			<?php echo form_open('home/update/phone','class="form-horizontal" role="form"'); ?>
			
				<div class="form-group">
				  <div class="col-sm-8">
				    <?php echo form_input('phone',''.$profile->phone.'','class="form-control" required'); ?>
					
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-8">
				  <?php echo form_submit('submit','Update','class="btn btn-default"'); ?>
					</div>
				</div>
			  <?php echo form_close(); ?>
		  </p>
        </div>
        
      </div>
      
    </div>
  </div>
  
  <!--update email form modal --->
  <div class="modal fade" id="update-email" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Email</h4>
        </div>
        <div class="modal-body">
          <p>
			<?php echo validation_errors(); ?>
			<?php echo form_open('home/update/email','class="form-horizontal" role="form"'); ?>
			
				<div class="form-group">
				  <div class="col-sm-8">
				    <?php // echo form_input('email',''.$profile->email.'','class="form-control" required'); ?>
					<input type="email" name="email" value="<?php echo $profile->email; ?>" class="form-control" required>
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-8">
				  <?php echo form_submit('submit','Update','class="btn btn-default"'); ?>
					</div>
				</div>
			  <?php echo form_close(); ?>
		  </p>
        </div>
        
      </div>
      
    </div>
  </div>
  
 <!--update password form modal --->
  <div class="modal fade" id="update-password" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Password</h4>
        </div>
        <div class="modal-body">
          <p>
			<?php echo validation_errors(); ?>
			<?php echo form_open('home/update/password','class="form-horizontal" role="form"'); ?>
			
				<div class="form-group">
				<label>Enter a New Password</label>
				  <div class="col-sm-8">
				    <?php echo form_password('password','','class="form-control" placeholder="Enter a new password" required'); ?>
					
				  </div>
				</div>
				
				<div class="form-group">
				<label>Confirm Password</label>
				  <div class="col-sm-8">
				    <?php echo form_password('confirm_password','','class="form-control" placeholder="Confirm Password" required'); ?>
					
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-8">
				  <?php echo form_submit('submit','Update','class="btn btn-default"'); ?>
					</div>
				</div>
			  <?php echo form_close(); ?>
		  </p>
        </div>
        
      </div>
      
    </div>
  </div>
  
 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<?php require_once('footer.php'); ?>