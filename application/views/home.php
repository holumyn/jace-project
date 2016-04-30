<?php require_once('header.php'); ?>

<!--Slider-->
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo base_url();?>img/slide-1.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Technology at its Peak</h3>
          
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>img/slide-2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>From Mobile apps...</h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url();?>img/slide-3.jpeg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>...to Awesome Websites...</h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>img/slide-4.png" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>...Outstanding Business Process Automation... </h3>
          <p></p>
        </div>
      </div>
	  
	  <div class="item">
        <img src="<?php echo base_url();?>img/slide-5.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>...ICT Training and More </h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
	-->
  </div>
<?php if(isset($message)){ ?>
			<h1 class="header"><?php $message; ?></h1>
			  
		<?php  } ?>
		<?php if($this->session->has_userdata('user_id')){ ?>
		<h3><?php $this->session->has_userdata('user_id'); ?></h3>
	<?php } ?>
<div class="jumbotron header">
	<p id="big-header">Our Comprehensive Range of Services</p>
	<p id="small-header">Leading technologies and products are the least you can expect from us </p>
	
</div>
<div class="jumbotron services">
<div class="container">
	<div class="row">
		
		<div class="col-sm-4">
			 <img class="img-responsive img-circle" src="<?php base_url(); ?>img/icon-1.png" alt="" width="100px" height="100px"> 
				<p><h4>Web & Software Development</h4>
				<span>Jade leads the Nigeria web design industry by producing strategically branded, 
				responsive websites for organizations looking to grow their online business
				</span>
				</p>
		
		</div>
		
		<div class="col-sm-4">
			<img class="img-responsive img-circle" src="<?php base_url(); ?>img/icon-2.png" alt="" width="100px" height="100px">
			<p><h4>Mobile App Development</h4>
			Are you looking for a team to help you build a great App for your company? 
			We can handle mobile projects from small, simple Apps to complex projects.
			</p>
		</div>
		
		<div class="col-sm-4">
			<img class="img-responsive img-circle" src="<?php base_url(); ?>img/icon-3.png" alt="" width="100px" height="100px">
			<p><h4>Business Process Automation</h4>
			<span>Automation software is cutting the time and money spent on completing business processes.
			gather, distribute, analyze, and integrate data into the strategic decision.
			</span>
			</p>
		</div>
		
		</div
		
        <div class="row">
		<div class="col-sm-4">
			<img class="img-responsive img-circle" src="<?php base_url(); ?>img/icon-4.png" alt="" width="100px" height="100px"> 
				<p><h4>Hardware Maintenance</h4>
				<span>An inside look at our employee-focused culture and successful growth. SEI is an independent hardware maintenance company that delivers.</span>
				</p>
		
		</div>
		<div class="col-sm-4">
			<img class="img-responsive img-circle" src="<?php base_url(); ?>img/icon-5.png" alt="" width="100px" height="100px"> 
			<p><h4>Data Backup & Recovery</h4>
			<span>Acronis provides industry standard backup & data recovery software for consumers and businesses of all sizes. 
			Protect and restore your sensitive information.
			</span>
			</p>
		</div>
		<div class="col-sm-4">
			<img class="img-responsive img-circle" src="<?php base_url(); ?>img/icon-6.png" alt="" width="140px" height="140px"> 
			<p><h4>ICT Training</h4>
			<span>Our ICT Computer Training is renowned nationwide for the high quality of its education 
			and training courses.
			</span>
			</p>
		</div>
		</div>
</div>
</div>

<div class="jumbotron testimonials">
<div class="container">
	<h2>What Our Clients Say</h2>
	<p>Read testimonials from some of our customers to get first-hand views of our products and services</p>
	<br><br>
	<div class="row">
		<div class="col-sm-6">
			<p>
				<img class="img-responsive img-circle" src="<?php base_url(); ?>img/img2.jpg" alt="" width="150px" height="150px" style="border:7px solid #fff;float:left;"> 
				<blockquote>
					I would recommend this company to anybody who is after a great services, quality and value for money.
				</blockquote>
				</p>
		</div>
		<div class="col-sm-6">
			<p>
				<img class="img-responsive img-circle" src="<?php base_url(); ?>img/img2.jpg" alt="" width="150px" height="150px" style="border:7px solid #fff;float:left;"> 
				<blockquote>
					I would recommend this company to anybody who is after a great services, quality and value for money.
				</blockquote>
			</p>
		</div>
		
  </div>
</div>
</div>

<div class="jumbotron clients">
<div class="container">
	<p>Our Clients</p>
	<div class="row">
		<div class="col-sm-2">
			<img src="<?php base_url(); ?>img/partner1.png" />
		</div>
		<div class="col-sm-2">
			<img src="<?php base_url(); ?>img/partner2.png" />
		</div>
		<div class="col-sm-2">
			<img src="<?php base_url(); ?>img/partner3.png" />
		</div>
		<div class="col-sm-2">
			<img src="<?php base_url(); ?>img/partner4.png" />
         </div>
		 <div class="col-sm-2">
			<img src="<?php base_url(); ?>img/partner5.png" />
		</div>
		<div class="col-sm-2">
			<img src="<?php base_url(); ?>img/partner6.png" />
         </div>
</div>
</div>
</div>


<?php require_once('footer.php'); ?>