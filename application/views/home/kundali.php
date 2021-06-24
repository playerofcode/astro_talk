<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Free kundali</h2>
				<ul>
					<li><a href="<?php echo base_url()?>">Home</a></li>
					<li><a href="">Free kundali</a></li>
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
			<h1>Make Free Kundli</h1>
			<p>Generate Free Astrology Kundli Report</p><br>
			<?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
			<div style="box-shadow: 5px 15px 15px rgba(0,0,0,0.4);padding: 30px;margin:10px;border-radius: 10px;text-align: left;background: #37a4dd;">
			<form action="<?php echo base_url('home/create_kundali');?>" method="post">
				<div class="row">
					<div class="form-group col-sm-6">
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder="Name">
					<?php echo form_error('name'); ?>
				</div>
				<div class="form-group col-sm-6">
					<label>Gender</label>
					<select name="gender" id="" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<?php echo form_error('gender'); ?>

				</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
					<label>Birth Date</label>
					<input type="text" name="date" class="form-control" placeholder="Date">
					<?php echo form_error('date'); ?>

				</div>
				<div class="form-group col-sm-4">
					<label>Birth Month</label>
					<select name="month" id="" class="form-control">
						<option selected="" disabled="">Month</option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="Octuber">Octuber</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
					<?php echo form_error('month'); ?>

				</div>
				<div class="form-group col-sm-4">
					<label>Birth Year</label>
					<input type="text" name="year" class="form-control" placeholder="Year">
					<?php echo form_error('year'); ?>
				</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
					<label>Birth Hour</label>
					<input type="number" name="hour" class="form-control" min="1" placeholder="Hour">
					<?php echo form_error('hour'); ?>
				</div>
				<div class="form-group col-sm-4">
					<label>Birth Minute</label>
					<input type="number" name="minute" class="form-control" min="1" placeholder="Minute">
					<?php echo form_error('minute'); ?>
				</div>
				<div class="form-group col-sm-4">
					<label>Birth Second</label>
					<input type="number" name="second" class="form-control" min="1" placeholder="Second">
					<?php echo form_error('second'); ?>
				</div>
				</div>
				<div class="form-group">
					<label> Birth Place</label>
					<input type="text" name="birth_place" placeholder="Birth Place" class="form-control">
					<?php echo form_error('birth_place'); ?>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-danger" value="Generate Horoscope">
				</div>
			</form>
		</div>
		</div>
	</div>
</div>
<!-- cart end-->	
</div>
</div>