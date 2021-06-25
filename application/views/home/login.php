<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>login</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="cart_page checkout_page register_page login_page">
<!-- cart -->
	<div id="register" class="cart_section checkout_section register_section">
		<div class="container-fluid" id="checkout">
				<?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
			<div class="row billing_and_payment_option wow fadeInDown   animated">
				<div class="heading_wrapper wow fadeInDown animated">
					<h2 class="wow fadeInDown animated">Login your Account</h2>
					<!-- <p class="wow fadeInDown animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p> -->
				</div>
				<!-- Billing Address -->
				<div class="login_box">
					<h3>Login Your Account</h3>
						<form  action="<?php echo base_url('home/user_login');?>" method="post" class="eb-form eb-mailform form-checkout" novalidate="novalidate">
							<div class="form-wrap">
								<input class="form-input form-control" type="email" name="email"  placeholder="E-Mail" value="<?php echo set_value('email');?>">
								<?php echo form_error('email'); ?>
							</div>
							<div class="form-wrap">
								<input class="form-input form-control"  type="text" name="password"  placeholder="Password:" <?php echo set_value('password');?>>
								<?php echo form_error('password'); ?>
							</div>
							<!-- <div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="defaultUnchecked">
								<label class="custom-control-label register-remember" for="defaultUnchecked">Remember me on this device</label>
                            </div> -->
							<button type="submit" class="btn ">Register</button>
							
							<p class="signInclass"> Dont Have an Account?  &nbsp;<a href="<?php echo base_url('home/register');?>">Sign Up</a> </p>
						
					</form>
					<div class="clear"></div>
				</div>
				<!-- Delivery Address  -->
			</div>
			<!-- your shopping cart -->
		</div>	
	</div>	
<!-- cart end-->	
</div>