<div class="jumbotron footer">
<div class="container">
  <div class="row">
	<div class="col-sm-4">
	  <h3 class="h3-bar">About Our Company</h3>
	  
	  JACE Technologies is an ICT Consulting Firm that employs technology to solve real-life process-based problems faced 
	  by organizations and businesses.<br><br>
	  Our core areas of focus include Web & Software Development, Business Process Automation, 
	  Hardware Maintenance, Data Backup & Recovery, and Training.
	</div>
	
	<div class="col-sm-4">
	  <h3 class="h3-bar">Subscribe for our Newsletter</h3>
	    <?php echo form_open('home/login','class="form-horizontal" role="form"'); ?>
	  <div class="form-group">
		  <div class="col-sm-10">
		      <?php echo form_input('subscribe',set_value('subscribe'),'class="form-control" placeholder="Enter Email to Subscribe" required'); ?>
			  
					
		  </div>
		</div>
		
		<div class="form-group">        
		  <div class="col-sm-4">
			  <?php echo form_submit('submit','Subscribe','class="btn btn-default"'); ?>
			</div>
		</div>
		<?php form_close(); ?>
	</div>
	<div class="col-sm-4">
	  <h3 class="h3-bar">Get in touch</h3>
	  
			
			<i class="fa fa-home" aria-hidden="true"></i>
			Plot 587 Zone B,
			Apo Resettlement,<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abuja.
			<br><br>
			<i class="fa fa-envelope" aria-hidden="true"></i> info@jacetechnologies.com.ng
			<br><br>
			<i class="fa fa-phone" aria-hidden="true"></i> +234 (0)807 463 1387,
			+234 (0)803 771 6337 
	  
		
		
	  </div>
	  
				
	</div>
  </div>
</div>
<div class="jumbotron footer-bottom">
<div class="container">
<div class="row ">
  <div class="col-sm-10">
		<p>&copy Copyright 2016. Jace Technologies.</p>
  </div>
  
  <div class="col-sm-2 social-icon">
		<span class="fa-stack fa-lg">
			<a href="#"><i class="fa fa-twitter fa-stack-1x"></i></a>
		</span>
		<span class="fa-stack fa-lg">
			<a href="#"><i class="fa fa-facebook fa-stack-1x"></i></a>
		</span>
		<span class="fa-stack fa-lg">
			<a href="#"><i class="fa fa-linkedin fa-stack-1x"></i></a>
		</span>
		<span class="fa-stack fa-lg">
			<a href="#"><i class="fa fa-google-plus fa-stack-1x"></i></a>
		</span>
		
	</div>
</div>
</div>
</div>
</body>
</html>

<?php if(isset($login_msg)){ ?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#login").modal('show');
	});
	
</script>
	<?php unset($login_msg); } ?>
	
<?php if(isset($signup_msg)){ ?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#signup").modal('show');
	});
</script>
    
	<?php unset($login_msg); } ?>
	
	<!--- Script for share icon --->
<script type="text/javascript">stLight.options({publisher: "c7e262a9-1710-4335-8317-7c0bca2a5728", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "c7e262a9-1710-4335-8317-7c0bca2a5728", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "googleplus", "pinterest", "whatsapp", "email", "sharethis"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>