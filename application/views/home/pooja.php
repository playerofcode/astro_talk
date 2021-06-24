<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Pooja</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Pooja</a></li>
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
									<?php foreach ($pooja_category as $key): ?>
									<li><a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $key->cat_name; ?></a></li>
									<?php endforeach ?>
								</ul>
						</div>
						<!-- category end-->
						
						<!-- category product -->
						<div id="category_product" class="category_product">
							<h3 class="wow fadeInDown animated">Latest Products </h3>
								<div class="">
									<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="<?php echo base_url();?>assets/image/products/products_01.png" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										<div class="sale"><span class="">Sale</span></div>
									</div>
									<div class="caption ">
										
										<div class="rate-and-title">
											<h4 class="wow fadeInDown animated"><a href="">Natural Mineral Stone</a></h4>
											<div class="rating wow fadeInDown animated">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<div class="clear"></div>
											</div>
											<p class="price wow fadeInDown animated">
												<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
											</p>
											<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<!-- products category end-->
								<div class="">
									<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="<?php echo base_url();?>assets/image/products/products_07.png" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										<div class="sale"><span class="">Sale</span></div>
									</div>
									<div class="caption ">
										
										<div class="rate-and-title">
											<h4 class="wow fadeInDown animated"><a href="">Natural Agate</a></h4>
											<div class="rating wow fadeInDown animated">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<div class="clear"></div>
											</div>
											<p class="price wow fadeInDown animated">
												<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
											</p>
											<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<!-- products category end-->
							<div class="">
								<div class="product-thumb">
									<div class="image wow fadeInDown animated">
										<a href=""><img class="wow fadeInDown animated" src="<?php echo base_url();?>assets/image/products/products_16.png" alt="Kundli Dosha" title="Kundli Dosha" width="100%"></a>
										<div class="sale"><span class="">Sale</span></div>
									</div>
									<div class="caption ">
										
										<div class="rate-and-title">
											<h4 class="wow fadeInDown animated"><a href="">Titanium Quartz</a></h4>
											<div class="rating wow fadeInDown animated">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<div class="clear"></div>
											</div>
											<p class="price wow fadeInDown animated">
												<span class="price-old">$123.20</span> <span class="price-new">$110.00</span>  
											</p>
											<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<!-- products category end-->
						</div>
						<!-- products category end-->
						
					</div>
				</div>
				
				<div class="col-sm-9">
					<div class="eb_left">
			<!--1 -->
					<?php foreach ($pooja as $key): ?>
						<div class="col-sm-4">
							<div class="product-thumb">
								<div class="image wow fadeInDown animated">
									<a href="<?php echo base_url('home/'.$key->puja_id);?>"><img class="wow fadeInDown animated" src="<?php echo base_url($key->puja_img);?>" alt="<?php echo $key->puja_name;?>" title="<?php echo $key->puja_name;?>" width="100%"></a>
								</div>
								<div class="caption">
									
									<div class="rate-and-title">
										<h4 class="wow fadeInDown animated"><a href="<?php echo base_url('home/product_info/'.$key->puja_id);?>"><?php echo $key->puja_name;?></a></h4>
										<p class="price wow fadeInDown animated">
											 <span class="price-new">Rs  <?php echo $key->price;?></span>  
										</p>
										<button type="button" class="btn wow fadeInDown animated" onclick="" title="Add to Cart"><span><i class="fa fa-shopping-cart"></i> Book Now</span></button>
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