
<!-- Footer Section -->
	<footer id="footer" class="footer">
		<div class="container-fluid">
			<div class="row">
			<!-- Newslatter-->
				<div class="footer_newslatter wow fadeInDown animated">
						<div class="box">
							<div class="row">
								<div class="col-sm-3">
									<strong class="wow fadeInDown animated">sign up for free</strong>
								</div>
								<div class="col-sm-4">
									<p class="wow fadeInDown animated">get your daily astrology, daily lovescope and daily tarot by email</p>
								</div>
								<div class="col-sm-5">
									<form id="newsletter" accept-charset="utf-8">
										<div class="success wow fadeInDown animated" style="display: none;">Your subscribe request has been sent!</div>
										<label class="email">
											<input type="email" placeholder="Enter your email here" class="wow fadeInDown animated">
										</label>
										<a href="#" data-type="submit" class="wow fadeInDown animated">subscribe</a>
									</form>
								</div>
							</div>
						</div>
				</div>
			<!-- Newslatter end-->
			<div class="row footer_matter">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="footer_logo_wrapper">
						<img src="<?php echo base_url();?>assets/image/logo/footer_logo.png" alt="footer_logo" class="img-responsive wow fadeInDown animated">
						<h3 class="wow fadeInDown animated">+91-123-456-7890</h3>
						<p class="wow fadeInDown animated">Donec id elit non mi porta gravida at eget metus. Donec id elit non Vestibulum id ligula porta felis euism od semper.</p>
						<h4 class="wow fadeInDown animated"><a href="#" class="btn wow fadeInDown animated">Read More</a></h4>
						<ul>
							<li class="wow fadeInDown animated"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="wow fadeInDown animated"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="wow fadeInDown animated"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							<li class="wow fadeInDown animated"><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="footer_list_wrapper">
						<h2 class="wow fadeInDown animated">Our Services</h2>
						<ul class="footer_list">
							<li class="wow fadeInDown animated"><a href="about_us.html"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a>
							</li>
							<li class="wow fadeInDown animated"><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Our Services </a>
							</li>
							<li class="wow fadeInDown animated"><a href="products.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Products List </a>
							</li>
							<li class="wow fadeInDown animated"><a href="cart.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Cart</a>
							</li>
							<li class="wow fadeInDown animated"><a href="checkout.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Checkout </a> </li>
							<li class="wow fadeInDown animated"><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog </a> </li>
							<li class="wow fadeInDown animated"><a href="contact_us.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact Us </a> </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="footer_list_wrapper">
						<h2>Forecast</h2>
						<ul class="footer_list">
							<li class="wow fadeInDown animated"><a href="Aries.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Aries</a>
							</li>
							<li class="wow fadeInDown animated"><a href="Aries.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Taurus </a>
							</li>
							<li class="wow fadeInDown animated"><a href="Aries.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Gemini</a>
							</li>
							<li class="wow fadeInDown animated"><a href="Aries.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Cancer</a>
							</li>
							<li class="wow fadeInDown animated"><a href="Aries.html"><i class="fa fa-angle-right" aria-hidden="true"></i>leo</a> </li>
							<li class="wow fadeInDown animated"><a href="Aries.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Libra</a> </li>
							<li class="wow fadeInDown animated"><a href="Aries.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Scorpio</a> </li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="download_wrapper">
						<h2 class="wow fadeInDown animated">Download App</h2>
						<p class="wow fadeInDown animated">Download Our Mobile App</p>
						<div class="download_btn_wrapper">
						  <a href="#">
							<img src="<?php echo base_url();?>assets/image/App-Store.png" class="img-responsive wow fadeInDown animated" alt="App_Store_img">
						  </a>
						  <a href="#">
							<img src="<?php echo base_url();?>assets/image/Google-Play.png" class="img-responsive wow fadeInDown animated" alt="Google_Play_img">
						  </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
	
	<div class="footer_copyright">
		<div class="container-fluid">
			<p class="wow fadeInDown animated">© Copyright 2020 by Horoscope. All right Reserved - Design By <a href="https://www.playerofcode.com/" target="_blank">Player Of Code</a></p>
		</div>
	</div>

<!-- Footer Section End -->
<!-- back-to-top scrtion -->
<div class="top_button">
  <a class="back-to-top" style="cursor:pointer;" id="top-scrolltop"><i class="fa fa-angle-up"></i></a>
</div>
<!-- back-to-top scrtion End-->
<!-- script files -->
<!-- home silder -->
<script>
$(document).ready(function(){
	$('#home-silder').owlCarousel({	
		items: 1,
		itemsDesktop:[1199,1],
		itemsDesktopSmall:[992,1],
		itemsTablet:[768,1],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: true,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});

$(document).ready(function(){
	$('#testimonial').owlCarousel({	
		items: 3,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,3],
		itemsTablet:[768,2],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: true,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});

$(document).ready(function(){
	$('#blog').owlCarousel({	
		items: 3,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,3],
		itemsTablet:[768,2],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: false,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});

$(document).ready(function(){
	$('#product').owlCarousel({	
		items: 4,
		itemsDesktop:[1199,3],
		itemsDesktopSmall:[992,3],
		itemsTablet:[768,2],
		itemsMobile:[450,1],
		autoPlay: 10000,
		pagination: false,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
});


</script>

	<script src="<?php echo base_url();?><?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/custom.js"></script>
	<script>
		function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
	</script>
<!-- script files -->
</body>
</html>
