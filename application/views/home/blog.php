  <?php include 'timeago.php'; ?>
<!-- breadcrumb -->
<section class="main_breadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumb-content">
				<h2>Latest Blog</h2>
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="">Latest Blog</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div id="content" class="blog_page blog_margin">
<!-- Our Services -->
	<div id="blogs" class="blog_section">
		<div class="container-fluid">
			<div class="row">
				<?php foreach ($blog as $key): ?>
				<div class="col-sm-3">
					<div class="blog_inner_matter">
						<div class="image">
							<a href="<?php echo base_url('home/blog_detail/'.$key->id);?>"><img src="<?php echo base_url($key->blog_image);?>" class="wow fadeInDown animated"></a>
							<div class="blog_date  wow fadeInDown animated">
								<span><?php
echo date('d-m-Y', strtotime($key->date));
?><span>
							</div>
						</div>
						<div class="admin_and_comments wow fadeInDown animated">
							<!-- <span class="blog_admin"><span><i class="fa fa-user-o"></i> Post By</span> --> <span><a href="">Admin</a></span></span>
							<span class="comments_date"><span><i class="fa fa-eye"></i> <?php echo facebook_time_ago($key->date); ?></span></span>
						</div>
						<h3 class="wow fadeInDown animated"><a href="<?php echo base_url('home/blog_detail/'.$key->id);?>"><?php echo $key->blog_title;?></a></h3>
						<p class="wow fadeInDown animated"><?php echo substr($key->blog_description,0,220);?></p>
						<a href="<?php echo base_url('home/blog_detail/'.$key->id);?>" class="btn wow fadeInDown animated" >Read More</a>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
<!-- Our Services End-->
<!-- Pagination -->
<div class="container-fluid">
	<div class="row">
		<div class="pagination-section text-center wow fadeInDown animated">
<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>

<!-- Pagination End-->
</div>