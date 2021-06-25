<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Book Pooja</h2>
				<ul>
					<li><a href="<?php echo base_url()?>">Home</a></li>
					<li><a href="">Book Pooja</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<style>
	.kundali label
	{
		color: white;
	}
	.round
	{
		background: url(<?php echo base_url('assets/image/hand_bg.png');?>);background-position:center center;
		background-repeat: no-repeat;
	}
	@keyframes round 
	{
		0%
		{
			transform: rotate(90deg);
		}
		100%
		{
			transform: rotate(360deg);
		}
	}
</style>
<div class="round">
<div id="content" class="cart_page checkout_page register_page kundali ">
<div class="container">
	<div class="row">
		<div class="col-md-12 col-12 text-center">
			<!-- <h1>Make Free Kundli</h1>
			<p>Generate Free Astrology Kundli Report</p><br> -->
			<?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
			<div style="box-shadow: 5px 15px 15px rgba(0,0,0,0.4);padding: 30px;margin:10px;border-radius: 10px;text-align: left;background: #37a4dd;">
			<div class="card">
				<div class="card-body">
					<?php foreach ($pooja as $key): ?>
					<form action="<?php echo base_url('home/confirm_pooja_booking/'); ?>" method="post">
						<div class="row">
							<div class="form-group col-md-6 col-12">
							<label>Puja Name</label>
							<input type="text" name="puja_name" value="<?php echo $key->puja_name;?>" class="form-control" readonly required>
							</div>	
							<div class="form-group col-md-6 col-12">
							<label>Puja Price </label>
							<input type="text" name="puja_price" class="form-control" value="<?php echo $key->price;?>" readonly required>
							</div>						
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
							<label>Puja Location</label>
							<select name="puja_location" class="form-control" required>
								<option value="At Home">At Home</option>
								<option value="Nearest Temple">Nearest Temple</option>
							</select>
							</div>	
							<div class="form-group col-md-6 col-12">
							<label>Priest Preference</label>
							<select name="priest_preference" class="form-control" required>
								<option value="Hindi">Hindi</option>
								<option value="Tamil">Tamil</option>
								<option value="Telugu">Telugu</option>
								<option value="Kanada">Kanada</option>
								<option value="Marathi">Marathi</option>
								<option value="Oria">Oria</option>
								<option value="Other">Other</option>
							</select>
							</div>						
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>Puja Date</label>
								<input type="date" name="puja_date" class="form-control" required>
							</div>
							<div class="form-group col-md-6 col-12">
								<label>Puja Time</label>
								<input type="time" name="puja_time" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12 col-12">
								<label>Name</label>
								<input type="text" name="name" value="" class="form-control" placeholder="Name" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>Mobile Number</label>
								<input type="tel" name="mobno" class="form-control" placeholder="Mobile Number" required>
							</div>
							<div class="form-group col-md-6 col-12">
								<label>Email</label>
								<input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo $this->session->userdata('email');?>" readonly>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>Country</label>
								<input type="text" name="country" class="form-control" value="India" required>
							</div>
							<div class="form-group col-md-6 col-12">
								<label>State</label>
								<input type="text" name="state" class="form-control" value="" placeholder="State" required>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>City/Town</label>
								<input type="text" name="city" class="form-control" placeholder="City/Town">
							</div>
							<div class="form-group col-md-6 col-12">
								<label>Pincode</label>
								<input type="text" name="pincode" class="form-control" placeholder="Pincode" required>
							</div>
						</div>
						<div class="form-group">
							<label>Note</label>
							<textarea name="note" placeholder="Note..."style="resize:none;" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<center><input type="submit" name="booking" value="Book Now" class="btn btn-success"></center>
						</div>
					</form>
				<?php endforeach ?>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- cart end-->	
</div>
</div>