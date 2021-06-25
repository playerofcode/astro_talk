<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Pooja</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Pooja Info</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="single_products_page">
<!-- single products page -->
	<div id="products_products" class="single_products_section">
		<?php foreach($pooja as $key):?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="eb_right single_products_right_side">
						<div class="single_products_images">
							<div class="single_product_image">
								<div class="sp-loading">
									<img src="<?php echo base_url($key->puja_img);?>" alt="Image Not found" width="100%">
								</div>
							</div>
							<!-- 
							<div class="sp-wrap">
								<div id="additional_silder_products_images" class="owl-carousel">
									<div class="item">
										<a href="assets/image/products/products_01.png">
											<img src="assets/image/products/products_01.png" alt="">
										</a>
									</div>	
									<div class="item">
										<a href="assets/image/products/products_02.png">
											<img src="assets/image/products/products_02.png" alt="">
										</a>
									</div>
									<div class="item">
										<a href="assets/image/products/products_03.png">
											<img src="assets/image/products/products_03.png" alt="">
										</a>
									</div>
									<div class="item">
										<a href="assets/image/products/products_07.png">
											<img src="assets/image/products/products_07.png" alt="">
										</a>
									</div>	
									<div class="item">
										<a href="assets/image/products/products_08.png">
											<img src="assets/image/products/products_08.png" alt="">
										</a>
									</div>	
									<div class="item">
										<a href="assets/image/products/products_09.png">
											<img src="assets/image/products/products_09.png" alt="">
										</a>
									</div>
									
								</div>
							</div> -->
						</div>
					</div>
				</div>
				
				
				<div class="col-sm-6">
					<div class="eb_left single_products_left_side">
						<h2><?php echo $key->puja_name;?></h2>
						<hr>
						<div class="price-block">
							<div class="price-box">
								<!-- <p class="in-stock"><i class="fa fa-check"></i> In Stock</p> -->
								<p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> Rs <?php echo $key->price;?> </span> </p>
								<!-- <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $125.99 </span> --> </p>
							</div>
						</div>
						
						<div class="add-to-box">
							<div class="add-to-cart">
								<!-- <div class="pull-left">
									<div class="custom pull-left">
										<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
										<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
										<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
									</div>
								</div> -->
								<a href="<?php echo base_url('home/book_pooja/'.$key->puja_id);?>" class="btn wow fadeInDown animated" title="Book Now"><span><i class="fa fa-shopping-cart"></i> Book Now</span></a>
							</div>
						</div>
						
						<div class="short-description">
							<h3>overview</h3>
                            <p><?php echo $key->description; ?></p>
						</div>
						
						<!-- <div class="email-addto-box">
							<ul class="add-to-links">
								<li> <a class="link-wishlist" href="javascript:void(0);"><span>Add to Wishlist</span></a></li>
								<li><span class="separator">|</span> <a class="link-compare" href="javascript:void(0);"><span>Add to Compare</span></a></li>
							</ul>
							<p class="email-friend"><a href="javascript:void(0);" class=""><span>Email to a Friend</span></a></p>
                      </div> -->
						<!-- <ul class="shipping-pro">
							<li>Free Wordwide Shipping</li>
							<li>30 Days Return</li>
							<li>Member Discount</li>
                        </ul> -->
						
					</div>	
				</div>
			</div>		
			
			<!---- ---------------------->
			<!--<div class="row">
				<div class="product-collateral">
					<div class="add_info">
							<ul id="product-detail-tab" class="nav nav-tabs product-tabs">
								<li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
								<li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
								<li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
							</ul>


						  <div id="productTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="product_tabs_description">
									<div class="std">
									<?php echo $key->description; ?>
								  </div>
								</div>
								<!-- product tabs description End--
								<div class="tab-pane fade" id="product_tabs_tags">
									<div class="box-collateral box-tags">
										<div class="tags">
											  <form id="addTagForm" action="#" method="get">
													<div class="form-add-tags">
														<label for="productTagName">Add Tags:</label>
														<div class="input-box">
															<input class="input-text" name="productTagName" id="productTagName" type="text">
															<button type="button" title="Add Tags" class=" btn btn-add" onclick="submitTagForm()"> <span>Add Tags</span> </button>
														</div>
													  <!--input-box--> 
													</div>
											  </form>
										</div>
									<!--tags--
									<p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
									</div>
								</div>
								<!-- Add Tags End--
								<div class="tab-pane fade" id="reviews_tabs">
									<div class="eb-Reviews">
										<div>
											<h4 class="eb-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h4>
											<ol class="commentlist">
												<li class="comment">
												<div>
													<img alt="" src="assets/image/member/member.png" class="avatar avatar-60 photo">
													<div class="comment-text">
													<div class="ratings">
														<div class="rating-box">
															<div style="width:100%" class="rating"></div>
														</div>
														</div>
														<p class="meta">
														<strong>John Doe</strong> 
														<span>–</span> April 19, 2018
														</p>
														<div class="description"><p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														<p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
														</div>
													</div>
												</div>
												</li><!-- #comment-## --
												<li class="comment">
													<div>
														<img alt="" src="assets/image/member/member2.png" class="avatar avatar-60 photo">
														<div class="comment-text">
														<div class="ratings">
															  <div class="rating-box">
																<div style="width:100%" class="rating"></div>
															  </div>
															  
															</div>
														<p class="meta">
														<strong>Stephen Smith</strong> <span>–</span> June 02, 2018
														</p>
														<div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														</div>
													</div>
												</div>
												</li><!-- #comment-## --
											</ol>
										</div>
									<div>
								<div>
								<div class="comment-respond">
									<span class="comment-reply-title">Add a review </span>			
									<form action="#" method="post" class="comment-form" novalidate="">
										<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
										<div class="comment-form-rating">
											<label id="rating">Your rating</label>
											<p class="stars">
											<span>
											<a class="star-1" href="#">1</a>
											<a class="star-2" href="#">2</a>
											<a class="star-3" href="#">3</a>
											<a class="star-4" href="#">4</a>
											<a class="star-5" href="#">5</a>
											</span>
											</p>
										</div>
										<p class="comment-form-comment">
											<label>Your review <span class="required">*</span></label>
											<textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
										</p>
										<p class="comment-form-author">
										<label for="author">Name <span class="required">*</span></label> 
										<input id="author" name="author" type="text" value="" size="30" required=""></p>
										<p class="comment-form-email">
										<label for="email">Email <span class="required">*</span></label> 
										<input id="email" name="email" type="email" value="" size="30" required=""></p>
										<p class="form-submit">
										<input name="submit" type="submit" id="submit" class="btn submit" value="Submit"> 
										</p>
									</form>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
						  </div>
					</div>
				</div>
			</div>-->
				
			<!---- ---------------------->
			
			<!-- relative products -->
			</div>
			<?php endforeach;?>
			<!-- Products End-->
			
			<!-- relative products  end-->
			
		</div>	
	</div>
</div>