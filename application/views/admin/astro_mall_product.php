    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Add Astro Mall Product</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Add Astro Mall Product
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">
<div class="row">
    <div class="col-xs-12">
       <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-warning text-center"><?php echo $this->session->flashdata('msg');?></div>
        <?php endif;?>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Astro Mall Product</h4>
            </div>
            <div class="card-body collapse in p-2">
                <form action="<?php  echo base_url('admin/add_astro_mall_product');?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Category</label>
                    <select name="cat_id" class="form-control">
                      <?php foreach($category as $key):?>
                      <option value="<?php echo $key->cat_id;?>"><?php echo $key->cat_name;?></option>
                    <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Product Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" placeholder="Product Name" class="form-control" value="<?php echo set_value('name'); ?>">
                    <?php echo form_error('name'); ?>
                  </div>
                  <div class="form-group">
                    <label>Image <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control">
                     <?php if(isset($upload_error)){echo $upload_error;} ?>
                  </div>
                  <div class="form-group">
                    <label>Quantity <span class="text-danger">*</span></label>
                    <input type="text" name="quantity" placeholder="Quantity" class="form-control" value="<?php echo set_value('quantity'); ?>">
                    <?php echo form_error('quantity'); ?>
                  </div>
                  
                   <div class="form-group">
                    <label>Price <span class="text-danger">*</span></label>
                    <input type="text" name="price" placeholder="Price" class="form-control" value="<?php echo set_value('price'); ?>">
                    <?php echo form_error('price'); ?>
                  </div>
                 <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description"  cols="30" rows="10" class="form-control" id="ckeditor" placeholder="Write Description..."><?php echo set_value('description'); ?></textarea>
                    <?php echo form_error('description'); ?>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Add Product" class="btn btn-success">
                  </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>