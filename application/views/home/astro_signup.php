<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Astrologer Registration</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Astrologer Registration</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="cart_page checkout_page register_page">
<div class="container">
	<div class="row">
		<div class="col-md-10 mx-auto my-5">
			<?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
			<div class="card bg-danger" style="box-shadow: 5px 15px 15px rgba(0,0,0,0.4);">
				<div class="card-body" style="padding:20px;">
					<form action="<?php echo base_url('home/create_astrologer');?>" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="form-group col-md-6">
								<label>Name</label>
								<input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo set_value('name');?>">
								<?php echo form_error('name'); ?>
							</div>
							<div class="form-group col-md-6">
								<label>Email</label>
								<input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo set_value('email');?>">
								<?php echo form_error('email'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Gender</label>
								<select name="gender" class="form-control" required="">
									<option value="Male" <?php echo  set_select('gender', 'Male'); ?>>Male</option>
									<option value="Female"  <?php echo  set_select('gender', 'Female'); ?>>Female</option>
								</select>
							</div>
							<div class="col-md-6 form-group">
							<label>Date Of Birth</label>
							<input type="date" name="dob" class="form-control" value="<?php echo set_value('dob');?>">
							<?php echo form_error('dob'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Age</label>
								<input type="text" name="age" placeholder="Age" class="form-control" value="<?php echo set_value('age');?>">
								<?php echo form_error('age'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>Mobile Number</label>
								<input type="tel" name="phone_no" placeholder="Mobile Number" class="form-control" value="<?php echo set_value('phone_no');?>">
								<?php echo form_error('phone_no'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Alternate Number</label>
								<input type="tel" name="alternate_no" placeholder="Alternate Number"  class="form-control" value="<?php echo set_value('alternate_no');?>">
								<?php echo form_error('alternate_no'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>Experience</label>
								<select name="experience" class="form-control" required="">
									<option value="1 Year" <?php echo  set_select('experience', '1 Year'); ?>>1 Year</option>
									<option value="2 Years" <?php echo  set_select('experience', '2 Year'); ?>>2 Years</option>
									<option value="3 Years" <?php echo  set_select('experience', '3 Year'); ?>>3 Years</option>
									<option value="4 Years" <?php echo  set_select('experience', '4 Year'); ?>>4 Years</option>
									<option value="5 Years" <?php echo  set_select('experience', '5 Year'); ?>>5 Years</option>
									<option value="6 Years" <?php echo  set_select('experience', '6 Year'); ?>>6 Years</option>
									<option value="7 Years" <?php echo  set_select('experience', '7 Year'); ?>>7 Years</option>
									<option value="8 Years" <?php echo  set_select('experience', '8 Year'); ?>>8 Years</option>
									<option value="9 Years" <?php echo  set_select('experience', '9 Year'); ?>>9 Years</option>
									<option value="10 Years" <?php echo  set_select('experience', '10 Year'); ?>>10 Years</option>
									<option value="11 Years" <?php echo  set_select('experience', '11 Year'); ?>>11 Years</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>City</label>
								<input type="text" name="city" class="form-control" placeholder="City" value="<?php echo set_value('city');?>">
								<?php echo form_error('city'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>Address</label>
								<input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo set_value('address');?>">
								<?php echo form_error('address'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Pan Card Number</label>
								<input type="text" name="pan_card_no" placeholder="Pan Card Number" class="form-control" value="<?php echo set_value('pan_card_no');?>">
								<?php echo form_error('pan_card_no'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>Bank Name</label>
								<input type="text" name="ac_name" placeholder="Bank Name" class="form-control"  value="<?php echo set_value('ac_name');?>">
								<?php echo form_error('ac_name'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Account Number</label>
								<input type="text" name="ac_no" placeholder="Account Number" class="form-control" value="<?php echo set_value('ac_no');?>">
								<?php echo form_error('ac_no'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>IFSC Code</label>
								<input type="text" name="ifsc_code" placeholder="IFSC Code" class="form-control" value="<?php echo set_value('ifsc_code');?>">
								<?php echo form_error('ifsc_code'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Astrologer Category</label>
								<input type="text" name="category" placeholder="Category" class="form-control" value="<?php echo set_value('category');?>">
								<?php echo form_error('category'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>Short Bio</label>
								<input type="text" name="short_bio" placeholder="Short Bio" class="form-control" value="<?php echo set_value('short_bio');?>">
								<?php echo form_error('short_bio'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 form-group">
								<label>Long Bio</label>
								<textarea name="long_bio" placeholder="Long Bio" class="form-control"><?php echo set_value('long_bio');?></textarea>
								<?php echo form_error('long_bio'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Skills</label>
								<input type="text" name="skills" placeholder="Skills" class="form-control" value="<?php echo set_value('skills');?>">
								<?php echo form_error('skills'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>Language</label>
								<input type="text" name="language" placeholder="Language" class="form-control" value="<?php echo set_value('language');?>">
								<?php echo form_error('language'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Upload Photo</label>
								<input type="file" name="photo" class="form-control">
								<?php if(isset($photo)):echo $photo;endif;?>
							</div>
							<div class="col-md-6 form-group">
								<label>Upload ID Proof</label>
								<input type="file" name="id_proof" class="form-control" >
								<?php if(isset($id_proof)):echo $id_proof;endif;?>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label>Report Charge</label>
								<input type="text" name="report_charge" placeholder="Enter Report Charge" class="form-control" value="<?php echo set_value('report_charge');?>" >
								<?php echo form_error('report_charge'); ?>
							</div>
							<div class="form-group col-md-6">
								<label>Call Charge</label>
								<input type="text" name="call_charge" placeholder="Enter Call Charge" class="form-control" value="<?php echo set_value('call_charge');?>">
								<?php echo form_error('call_charge'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Create Password</label>
								<input type="password" name="password" placeholder="Create Password" class="form-control" value="<?php echo set_value('password');?>">
								<?php echo form_error('password'); ?>
							</div>
							<div class="col-md-6 form-group">
								<label>Confirm Password</label>
								<input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" value="<?php echo set_value('cpassword');?>">
								<?php echo form_error('cpassword'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 form-group text-center">
								<input type="submit" name="astrologer" class="btn btn-success">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>