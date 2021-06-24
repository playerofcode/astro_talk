<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Contact Us</h2>
				<ul>
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="contact_page">
<!-- Our Services -->
	<div id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
						<?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
					<div class="block-sm login_box">
						<h3>Get in Touch</h3>
						<p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects we’re working on.</p>
						<div class="comments-form-wrapper clearfix comment-respond">
							<form action="<?php echo base_url('home/getEnquiry');?>" class="comment-form" method="post" id="postComment">
								<div class="field">
									<label for="name">Name<em class="required">*</em></label>
									<input type="text" class="input-text" title="Name" value=""  name="name" required="">
								</div>
								<div class="field">
									<label for="email">Email<em class="required">*</em></label>
									<input type="email" class="input-text validate-email" title="Email" value="" name="email" required="">
								</div>
								<div class="clear"></div>
								<div class="field aw-blog-comment-area">
									<label for="comment">Your Message<em class="required">*</em></label>
									<textarea rows="5" cols="50" class="input-text" title="Comment" name="message"></textarea>
								</div>
								<div style="width:96%" class="button-set">
									<button type="submit" class="btn submit"><span><span>Contact</span></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="contact-box-wrap">
						<div class="contact-box">
						  <div class="contact-box-item">
							<p class="contact-box-title">Get social</p>
								<ul class="top-header-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
						  </div>
						  <div class="contact-box-item">
							<p class="contact-box-title">Phone</p>
							<div class="link-inline"><a href="#"><i class="fa fa-phone"></i> 1-800-1234-567</a></div>
						  </div>
						  <div class="contact-box-item">
							<p class="contact-box-title">E-mail</p>
							<div class="link-inline"><a href="#"><i class="fa fa-envelope-o"></i> info@company.gmail.com</a></div>
						  </div>
						  <div class="contact-box-item">
							<p class="contact-box-title">Address</p>
							<div class="link-inline link-inline-top"><a href="#"><i class="fa fa-map-marker"></i> 6036 Richmond hwy., Alexandria, VA, 2230</a></div>
						  </div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
<!-- Our Services End-->

</div>