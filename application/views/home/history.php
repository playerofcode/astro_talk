<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>History</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">History</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="single_products_page">
<!-- single products page -->
	<div id="products_products" class="single_products_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="eb_right single_products_right_side">
						<div class="single_products_images">
							<div class="single_product_image">
								<div class="sp-loading">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-sm-6">
					<div class="eb_left single_products_left_side">
					
						
						
					</div>	
				</div>
			</div>		
			
			<!---- ---------------------->
			<div class="row">
				<div class="product-collateral">
					<div class="add_info">
							 <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
								<li class="active"> <a href="#order_history" data-toggle="tab"> Order History </a> </li>
								<li><a href="#transaction_history" data-toggle="tab">Transaction History</a></li>
								<li> <a href="#wallet_history" data-toggle="tab">Wallet History</a> </li>
							</ul>


						  <div id="productTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="order_history">
									<div class="std">
									<table class="table table-bordered">
										<tr>
											<th>S.No.</th>
											<th>Pooja Name</th>
											<th>Pooja Price</th>
											<th>Pooja Date</th>
											<th>Receipt</th>
											<th>Status</th>
										</tr>
										<?php $i=1;foreach ($order_history as $key): ?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $key->puja_name;?></td>
												<td><?php echo $key->puja_price;?></td>
												<td><?php echo $key->date;?></td>
												<td><a href="#">Receipt</a></td>
												<td>
													<span class="badge badge-pill 
									<?php 
									if($key->status=='pending')
									{
										echo "badge-warning";
									}
									elseif($key->status=='rejected')
									{
										echo "badge-danger";
									}
									else
									{
										echo "badge-success";
									}
									?> py-1"><?php echo $key->status; ?></span>
												</td>
											</tr>
										<?php $i++;endforeach ?>
									</table>
								  </div>
								</div>
								<div class="tab-pane fade" id="transaction_history">
									<table class="table table-bordered">
										<tr>
											<th>S.No.</th>
											<th>Payment ID</th>
											<th>Order ID</th>
											<th>Payment Mode</th>
											<th>Transaction Amount</th>
											<th>Datetime</th>
										</tr>
										<?php $i=1;foreach ($transaction_history as $key): ?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $key->payment_id?></td>
												<td><?php echo $key->order_id?></td>
												<td><?php echo $key->payment_mode?></td>
												<td><?php echo $key->gross_amount?></td>
												<td><?php echo $key->date?></td>
											</tr>
										<?php $i++;endforeach ?>
									</table>
								</div>
								<div class="tab-pane fade" id="wallet_history">
									<table class="table table-bordered">
										<tr>
											<th>S.No.</th>
											<th>Description</th>
											<th>Amount</th>
											<th>Datetime</th>
										</tr>
										<?php $i=1;foreach ($wallet_history as $key): ?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $key->description;?></td>
												<td><?php echo $key->amount;?></td>
												<td><?php echo $key->date;?></td>
											</tr>
										<?php $i++;endforeach ?>
									</table>
								</div>
						  </div>
					</div>
				</div>
			</div>
			</div>			
		</div>	
	</div>