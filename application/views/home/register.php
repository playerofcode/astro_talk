<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>register</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">register</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="cart_page checkout_page register_page">
<!-- cart -->
	<div id="register" class="cart_section checkout_section register_section">
		<div class="container-fluid" id="checkout">
				<?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
			<div class="row billing_and_payment_option wow fadeInDown   animated">
				<div class="heading_wrapper wow fadeInDown animated">
					<h2 class="wow fadeInDown animated">Registration</h2>
					<!-- <p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p> -->
				</div>
				<!-- Billing Address -->
				<div class="col-sm-6 col-lg-6">
					<div class="login_box">
					<h3>Create Your Account</h3>
						<form action="<?php echo base_url('home/create_user');?>" method="post" class="eb-form eb-mailform form-checkout" novalidate="novalidate">
							<div class="form-wrap has-error">
								<input class="form-input form-control" type="text" name="fname"  placeholder="First Name" value="<?php echo set_value('fname');?>">
								<?php echo form_error('fname'); ?>
							</div>
							<div class="form-wrap has-error">
								<input class="form-input form-control" type="text" name="lname"  placeholder="Last Name" value="<?php echo set_value('lname');?>">
								<?php echo form_error('lname'); ?>
							</div>
							<div class="form-wrap">
								<input class="form-input form-control" type="email" name="email"  placeholder="E-Mail" value="<?php echo set_value('email');?>">
								<?php echo form_error('email'); ?>
							</div>
							<div class="form-wrap">
								<input class="form-input form-control" type="password" name="password"  placeholder="Password:" value="<?php echo set_value('password');?>">
								<?php echo form_error('password'); ?>
							</div>
							<div class="form-wrap">
								<input class="form-input form-control"  type="password" name="cpassword"  placeholder="Confirm Password:" value="<?php echo set_value('cpassword');?>">
								<?php echo form_error('cpassword'); ?>
							</div>
							<!-- <div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
								<label class="custom-control-label register-remember" for="defaultUnchecked">Remember me on this device</label>
                            </div> -->
							<button type="submit" class="btn ">Register</button>
							
							<p class="signInclass"> Already have an account? &nbsp;<a href="<?php echo base_url('home/login');?>">Sign In</a> </p>
						
					</form>
					</div>
				</div>
				<!-- Delivery Address  -->
				<div class="col-sm-6 col-lg-6  wow fadeInDown   animated registration">
					<h3>Benefit of Registration</h3>
					 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
					 
					 <ul>
						<li><i class="fa fa-check"></i> If you are going to use a passage of Lorem Ipsum</li>
						<li><i class="fa fa-check"></i> All the Lorem Ipsum generators on the Internet tend</li>
						<li><i class="fa fa-check"></i> The standard chunk of Lorem Ipsum used since the 1500s</li>
						<li><i class="fa fa-check"></i> a Latin professor at Hampden-Sydney College in Virginia</li>
						<li><i class="fa fa-check"></i> It is a long established fact that a reader </li>
					 </ul>
				</div>
			</div>
			<!-- your shopping cart -->
		</div>	
	</div>	
<!-- cart end-->	
</div>