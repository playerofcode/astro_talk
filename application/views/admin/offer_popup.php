    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Offer Popup</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Offer Popup
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
                <h4 class="card-title">Offer Popup</h4>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  + Post Offer Popup
</button>
            </div>
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($offer_popup as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><img src="<?php echo base_url().$key->image;?>" style="height:200px;width:300px;"/></td>
                                <td><a onclick="return confirm('Are you sure?');" href="<?php echo base_url('admin/delete_offer_popup/'.$key->id);?>" class="btn btn-danger">Delete</a></td>
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
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Post Offer Popup</h5>
        
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('admin/post_offer_popup');?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <input type="file" name="image" class="form-control" required="">
          </div>
          <div class="form-group">
              
          </div>
      
      </div>
      <div class="modal-footer">
       
        <input type="submit" value="Post Now" class="btn btn-success">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>