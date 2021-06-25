<style>
	#products.products_section .product-thumb
	{
		min-height: 360px;
	}
</style>
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Astro Mall</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Astro Mall</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="products_page">
<!-- products -->
	<div id="products" class="products_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="eb_right">
						<!-- category -->
						<div id="category" class="category">
							<h3 class="wow fadeInDown animated">category</h3>
								<ul class="wow fadeInDown animated">
									<?php foreach ($astro_mall_category as $key): ?>
									<li><a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $key->cat_name; ?></a></li>
									<?php endforeach ?>
								</ul>
						</div>
						<!-- category end-->
					</div>
				</div>
				
				<div class="col-sm-9">
					<div class="eb_left">
			<!--1 -->
					<?php foreach ($astro_mall_product as $key): ?>
						<div class="col-sm-3">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href="<?php echo base_url('home/product_info/'.$key->id);?>"><img class="wow fadeInDown animated" src="<?php echo base_url($key->image);?>" alt="<?php echo $key->name;?>" title="<?php echo $key->name;?>" width="100%" height="200px"></a>
								</div>
								<div class="caption">
									
									<div class="rate-and-title">
										<h6 class="wow fadeInDown animated"><a href="<?php echo base_url('home/product_info/'.$key->id);?>"><?php echo $key->name;?></a></h6>
										<p class="price wow fadeInDown animated">
											 <span class="price-new">Rs <?php echo $key->price;?></span>  
										</p>
										<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
									</div>
								</div>
							</div>
						</div>		
						<?php endforeach ?>								
					<!-- products end -->
					<!-- Pagination -->
						<!-- <div class="clear"></div>
								<div class="pagination-section text-center wow fadeInDown animated">
									<a href="#" class="prev page-numbers"><i class="fa fa-angle-left"></i></a>
									<span class="page-numbers current" aria-current="page">1</span>
									<a href="#" class="page-numbers">2</a>
									<a href="#" class="page-numbers">3</a>
									<a href="#" class="page-numbers">4</a>
									<a href="#" class="page-numbers">5</a>
									<a href="#" class="next page-numbers"><i class="fa fa-angle-right"></i></a>
								</div> -->
						<!-- Pagination End-->
					</div>	
				</div>
				
			</div>	
		</div>	
	</div>	
	
</div>