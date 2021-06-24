  <?php include 'timeago.php'; ?>
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Blog Details</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Blog Details</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="blog_page blog_details">
<!-- Our Services -->
	<div id="blogs" class="blog_section">
		<div class="container-fluid">
			<div class="row">		
				<?php foreach ($blog as $key):?>
				<div class="col-sm-9">
					<div class="eb_left">
						<div class="col-sm-12">
							<div class="blog_inner_matter">
								<div class="image">
									<a href=""><img src="<?php echo base_url($key->blog_image);?>" class="wow fadeInDown animated"></a>
								</div>
								<div class="admin_and_comments wow fadeInDown animated">
									<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
									<!-- <span class="comments_date blog_admin"><span><i class="fa fa-comments-o"></i> 10 comments</span></span> -->
									<span class="comments_date blog_dates"><span><i class="fa fa-clock-o"></i> <?php
echo date('d-m-Y', strtotime($key->date));
?>  <?php echo facebook_time_ago($key->date); ?></span></span>
								</div>
								<h2 class="wow fadeInDown animated"><a href=""><?php echo $key->blog_title; ?></a></h2>
								<p class="wow fadeInDown animated"><?php echo $key->blog_description; ?></p>
								
							</div>
						</div>
							</div>
						</div>
					<?php endforeach;?>
					<!-- right side -->
						<div class="col-sm-3">
							<div class="eb_right">
								<!-- category -->
								<div id="category" class="category blog_margin">
									<h3 class="wow fadeInDown animated">category</h3>
										<ul class="wow fadeInDown animated">
											<?php foreach ($category as $key): ?>
											<li><a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $key->cat_name; ?></a></li>
											<?php endforeach ?>
										</ul>
								</div>
								<!-- category end-->
							<!-- sidebar_blog -->
								<div id="sidebar_blog" class="sidebar_blog blog_margin">
									<h3 class="wow fadeInDown animated">Latest Blogs </h3>
									<div class="row">
										<?php foreach ($recent_blog as $key): ?>
										<div class="col-sm-12">
											<div class="blog_inner_matter">
												<div class="image">
													<a href=""><img src="<?php echo base_url($key->blog_image);?>" class="wow fadeInDown animated"></a>
													<div class="blog_date  wow fadeInDown animated">
														<span><?php echo date('d-m-Y', strtotime($key->date));?><span>
													</div>
												</div>
												<div class="blog_text_matter">
												<h3 class="wow fadeInDown animated"><a href=""><?php echo $key->blog_title; ?></a></h3>
													<div class="admin_and_comments wow fadeInDown animated">
														<span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> <span><a href="">Admin</a></span></span>
													</div>
													
													<a href="<?php echo base_url('home/blog_detail/'.$key->id);?>" class="btn wow fadeInDown animated" >Read More</a>
												</div>
												<div class="clear"></div>
											</div>
										</div>
										<?php endforeach ?>
									</div>
								</div>
								<!-- tags -->
								<div id="tags" class="tags blog_margin">
									<h3 class="wow fadeInDown animated">Tags</h3>
									<ul class="big_tags wow fadeInDown animated">
										<li><a class="tag btn" href="javascript:void(0);">Kundli Dosha</a></li>
										<li><a class="tag btn" href="javascript:void(0);">Consultation</a></li>
										<li><a class="tag btn" href="javascript:void(0);">Face Reading</a></li>
										<li><a class="tag btn" href="javascript:void(0);">marrige</a></li>
										<li><a class="tag btn" href="javascript:void(0);">business</a></li>
										<li><a class="tag btn" href="javascript:void(0);">children</a></li>
									</ul>
								</div>
								<!-- tags -->
							</div>
						</div>
			</div>
		</div>
	</div>
<!-- Our Services End-->

</div>