<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vaidik AstroTalk | Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.carousel.css"> 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/wow/animate.css"> 
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/image/favicon.png" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/wow/wow.min.js"></script>
	
	<script>
	new WOW().init();
	  wow = new WOW(
		{
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
		)
		wow.init();
		
       
	</script>
	
</head>
<body>
	<style>
   .social_icon
   {
    top:200px;
    right:0px;
    position: fixed;
    height: 80px;
    width:200px;
    z-index: 999;
    background: #ff7e00;
    margin-right:-160px;
    font-size:12px;
   }
   .social_icon:hover
   {
    cursor: pointer;
    margin-right:0px;
    transition:0.4s;
   }
   .social_item
   {
    height: 40px;
    width: 200px;
    line-height: 40px;
    color: white; 
   }
   .social_item a
   {
    color:#fff;
   }
   .social_item_left
   {
    height: 40px;
    text-align: center;
    line-height: 40px;  
    width:160px;
    float: right;
    background: blue;
   }
   .social_item_left:hover
   {
    
    background: #37a0d7;
   }
   .social_item_right
   {
    float: left;
    height: 40px;
    width: 40px;
    line-height: 40px;
    text-align: center;
   }

 </style>
 <div id="google_translate_element" class="text-center"></div>
	<div class="social_icon">
    <div class="social_item">
    <div class="social_item">
        <div class="social_item_right"><i class="fa fa-phone"></i></div>
      <div class="social_item_left"> <a href="<?php echo base_url('home/talk_to_astrologer');?>">Talk to Astrologer</a></div>
      
    </div>
    <div class="social_item_right"><i class="fa fa-comment"></i> </div>
      <div class="social_item_left"><a href="<?php echo base_url('home/chat_to_astrologer');?>">Chat From Astrologer</a></div>
      
    </div>
  </div>
  
<header class="header-area">
	<!-- Top Header -->
	<div class="top-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-12">
					<ul class="top-header-contact-info">
						<li><i class="fa fa-envelope-o"></i><span ></span> ojasvientar@gmail.com</li>
						<li><i class="fa fa-phone"></i> <a href="tel:+44587154756">+91 945-199-5835</a></li>
					</ul>
				</div>
				
				<div class="col-lg-4 col-md-12">
					<ul class="top-header-social header_account">
						 <?php if(!empty($this->session->userdata('email'))):?>
						 	<li><b>Welcome <?php echo $this->session->userdata('email');?></b></li>
						 	<li><a href="<?php echo base_url('home/wallet');?>">Wallet <span></span></a> </li>
						 	<li><a href="<?php echo base_url('home/history');?>">History <span></span></a> </li>
						<li><a href="<?php echo base_url('home/logout');?>"><i class="fa fa-sign-in"></i> Logout <span></span></a> </li>
					<?php else: ?>
						<li><a href="<?php echo base_url('home/login');?>"><i class="fa fa-sign-in"></i> Login <span>/</span></a> </li>
						<li><a href="<?php echo base_url('home/register');?>"><i class="fa fa-pencil-square-o"></i> Register</a></li>
					<?php endif; ?>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- End Top Header -->

	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="astrology-responsive-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="astrology-responsive-menu">
						<div class="logo">
							<a href="<?php echo base_url();?>">
								<img src="<?php echo base_url();?>assets/image/logo/logo_main.png" alt="logo">
							</a>
						</div>
						
						
						<div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="<?php echo base_url('home/cart');?>"><i class="fa fa-shopping-cart"></i><span>0</span></a>
										</div>
									</div>

									<!-- <div class="option-item">
										<div class="search-btn-box">
											<a href="#search"><i class="search-btn fa fa-search"></i></a>
										</div>
									</div> -->

									<!-- <div class="option-item">
										<a href="contact_us.html" class="btn"> Appointment</a>
									</div> -->
								</div>
					<!--mobile Menu  -->

					<div id="mySidenav" class="sidenav">
						<div class="menu_slid_bg">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
							
								<div class="col-sm-12" style="padding:0px;">
									<h3>Menus</h3>
									
									<ul class="accordion" id="accordion-category">
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url();?>" class=""></i> Home</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/about');?>" class=""></i> About us</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/pooja');?>" class=""></i> Pujas</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/horoscope');?>" class=""></i> Horoscope</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/astro_mall');?>" class=""></i> Astro Mall</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/kundali');?>" class=""></i> Kundali</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/blog');?>" class=""></i> Blog</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/contact');?>" class=""> Contact Us</a>
										</li>
										<?php if(!empty($this->session->userdata('email'))):?>
											<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/wallet');?>" class=""> Wallet</a>
											</li>
											<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/history');?>" class=""> History</a>
											</li>
											<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/logout');?>" class=""> Logout</a>
										</li>
										<?php else: ?>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/register');?>" class=""> Register</a>
										</li>
										<li class="panel mobile_menu_li">
											<a href="<?php echo base_url('home/login');?>" class=""> Login</a>
										</li>
									<?php endif; ?>
									</ul>
							<div class="clear"></div>
							</div>
							 
						</div>
					</div>

					<span class="menu_open" onclick="openNav()">&#9776; Menu</span>
					<!-- mobile Menu  end-->
					</div>
				</div>
			</div>
		</div>

		<div class="astrology-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="header_menu_wrapper">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="<?php echo base_url();?>">
								<img src="<?php echo base_url();?>assets/image/logo/logo_main.png" alt="logo">
							</a>

							<div class="collapse navbar-collapse mean-menu" style="display: block;">
								<ul class="navbar-nav">
									<li class="nav-item"><a href="<?php echo base_url();?>" class="nav-link active">Home</a></li>
									
									<li class="nav-item"><a href="<?php echo base_url('home/about');?>" class="nav-link">About Us</a></li>
									<li class="nav-item"><a href="<?php echo base_url('home/pooja');?>" class="nav-link">Pujas</a></li>
									<li class="nav-item"><a href="<?php echo base_url('home/horoscope');?>" class="nav-link">Horoscope</a></li>
									<li class="nav-item"><a href="<?php echo base_url('home/astro_mall');?>" class="nav-link">Astro Mall</a></li>
									<li class="nav-item"><a href="<?php echo base_url('home/kundali');?>" class="nav-link">Kundali</a></li>
									<li class="nav-item"><a href="<?php echo base_url('home/blog');?>" class="nav-link">Blog</a></li>
									
									<li class="nav-item"><a href="<?php echo base_url('home/contact');?>" class="nav-link">Contact</a></li>
								</ul>

								<div class="others-option align-items-center">
									<div class="option-item">
										<div class="cart-btn">
											<a href="<?php echo base_url('home/cart');?>"><i class="fa fa-shopping-cart"></i><span>0</span></a>
										</div>
									</div>

									<!-- <div class="option-item">
										<div class="search-btn-box">
											<a href="#search"><i class="search-btn fa fa-search"></i></a>
										</div>
									</div> -->

									<!-- <div class="option-item">
										<a href="contact_us.html" class="btn"> Appointment</a>
									</div> -->
								</div>
							</div>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Navbar Area --> 
<div id="search" class="input-group header">
	<span class="close">x</span>
		<form>
			<input value="" name="search" type="search" placeholder="Search">
			 <span class="input-group-btn">
				<button type="button" class="btn"><i class="fa fa-search"></i></button>
			</span>
			<div class="clear"></div>
		</form>
</div>	
</header>
<!-- Header End -->