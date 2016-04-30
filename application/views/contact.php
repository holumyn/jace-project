<?php require_once('header.php'); ?>

<div class="container">
  <div class="row profile">
    <div class="col-sm-8">
	<h3>Get in Touch With Us</h3><br>
	<div class="alert alert-success">
	<?php 
	if(isset($success)){ ?>
		<div class="alert alert-success">
	<?php	echo $success; ?>
		</div>
	<?php } ?>
	</div>
	<?php echo validation_errors(); ?>
	<?php echo form_open('home/contact/send_message','class="form-horizontal" role="form"'); ?>
	<div class="form-group">
		<label class="control-label col-sm-2" for="name">Name:</label>
		  <div class="col-sm-10">          
			<?php echo form_input('name',set_value('name'),'class="form-control" placeholder="Enter Name" required'); ?>
		  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<?php echo form_input('email',set_value('email'),'class="form-control" placeholder="Enter Email" required'); ?>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="subject">Subject:</label>
				  <div class="col-sm-10">
					<?php echo form_input('subject',set_value('subject'),'class="form-control" placeholder="Enter Subject" required'); ?>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="message">Message:</label>
				  <div class="col-sm-10">
					<?php echo form_textarea('message',set_value('message'),'class="form-control" required'); ?>
				</div>
				</div>
				
				
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
				  <?php echo form_submit('submit','Send','class="btn btn-default"'); ?>
					
				  </div>
				</div>
			  <?php echo form_close(); ?>
		</div>
		<div class="col-sm-4">
			<h3>Address</h3>
			
			<i class="fa fa-home" aria-hidden="true"></i>
			Plot 587 Zone B,
			Apo Resettlement,<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abuja.
			<br><br>
			<i class="fa fa-envelope" aria-hidden="true"></i> info@jacetechnologies.com.ng
			<br><br>
			<i class="fa fa-phone" aria-hidden="true"></i> +234 (0)807 463 1387,
			+234 (0)803 771 6337 
			<br><br>
			<h3>Visit Us today</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7878.974129083421!2d7.412474237638415!3d9.110402450756483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e755e23202127%3A0x35eb0056e42ab366!2sB+Cl%2C+Abuja!5e0!3m2!1sen!2sng!4v1461971651823" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
  </div>
</div>
<?php require_once('footer.php'); ?>