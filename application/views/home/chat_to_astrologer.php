<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Talk to Astrologer</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Talk to Astrologer</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="cart_page checkout_page register_page">
<div class="container">
	<div class="row">
		<?php foreach($astrologer as $key):?>
		<div class="col-sm-4">
			<div class="card" style="box-shadow:0px 5px 10px rgba(0, 0, 0, 0.4);padding: 20px;text-align: center;background: url(<?php echo base_url('assets/image/hand_bg.png');?>);background-position:center center;min-height: 590px;margin:10px;color:#000;font-weight:bold;">
				<div class="card-body text-center">
					<center><img src="<?php if(!empty($key->photo)):echo base_url($key->photo);else:echo base_url('assets/image/avatar.png');endif;?>" style="height:220px;width: 220px;border-radius: 50%;border:5px solid orange;" class="img-responsive"></center>
					<h3><?php echo $key->name;?></h3>
					<p><?php echo $key->skills;?></p>
					<p><?php echo $key->language;?></p>
					<p><?php echo "Experience: ".$key->experience;?></p>
					<p><?php echo "<b>".$key->call_charge." per minute</b>";?></p>
					<button type="submit" class="btn "> <span class="fa fa-comment"></span> Chat</button>
				</div>
			</div>
		</div>
	<?php endforeach;?>
	</div>
</div>
</div>