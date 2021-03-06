    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">All Pooja</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">All Pooja
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
                <h4 class="card-title">All Pooja</h4>
            </div>
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Cat. ID</th>
                                <th>Image</th>
                                <th>Pooja Name</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($pooja as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <th scope="row"><?php echo $key->cat_id; ?></th>
                                <td><img src="<?php echo base_url($key->puja_img);?>" style="height:100px;width:100px;" alt="Image not Found"/></td>
                                <td><?php echo $key->puja_name;?></td>
                                <td><?php echo $key->description;?></td>
                                 <td><a href="<?php echo base_url('admin/edit_pooja/'.$key->puja_id);?>" class="btn btn-warning btn-sm">Edit</a></td> 
                                <td><a onclick="return confirm('Are you sure?');"href="<?php echo base_url('admin/delete_pooja/'.$key->puja_id);?>" class="btn btn-danger btn-sm">Delete</a></td>
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