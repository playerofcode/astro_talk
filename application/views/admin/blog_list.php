    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Blog List</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Blog List
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">
<!-- Responsive tables start -->
<div class="row">
    <div class="col-xs-12">
       <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-warning text-center"><?php echo $this->session->flashdata('msg');?></div>
        <?php endif;?>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Posted Blog </h4>
            </div>
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Category Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Posted By</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($blog_list as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $key->cat_id;?></td>
                                <td><img src="<?php echo base_url($key->blog_image);?>" height="100" width="100"></td>
                                <td><?php echo $key->blog_title;?></td>
                                <td><?php echo $key->blog_description;?></td>
                                <td><?php echo $key->posted_by;?></td>
                                <td><a href="<?php echo base_url('admin/change_blog_status/'.$key->id);?>"class="btn btn-sm <?php if($key->status=='pending'){echo 'btn-danger';}else{echo 'btn-success';}?>"><?php echo $key->status;?></a></td>
                                <td><a href="<?php echo base_url('admin/edit_blog/'.$key->id);?>" class="btn btn-warning btn-sm">Edit</a></td>
                                <td><a onclick="return confirm('Are you sure?');"href="<?php echo base_url('admin/delete_blog/'.$key->id);?>" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            <?php $i++;endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Responsive tables end -->
        </div>
      </div>
    </div>