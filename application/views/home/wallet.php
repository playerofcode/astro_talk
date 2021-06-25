<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Wallet</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Wallet</a></li>
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
			<div class="row py-5">
				<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card" style="border:1px solid orange;">
				<div class="card-header  text-center bg-success text-white" style="padding:20px;background: orange;color:white;font-weight: bold;">
					Currect Balance: Rs <?php echo $current_balance; ?>
				</div>
				<div class="card-body" style="padding:10px;">
					<form action="<?php echo base_url('home/add_balance');?>" method="post">
						<div clas="form-group">
						<input type="text" name="amount" placeholder="Enter Amount" class="form-control" required="">
						</div>
						<div class="form-group"><br>
							<center><input type="submit" name="add" class="btn btn-success" value="Add Money"></center>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
		</div>	
	</div>	
<!-- cart end-->	
</div>