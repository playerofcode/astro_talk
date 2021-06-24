    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Career</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Career
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
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Alternate No</th>
                                <th>CV</th>
                                <th>Comments</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($career as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $key->name; ?></td>
                                <td><?php echo $key->email; ?></td>
                                <td><?php echo $key->mobno1; ?></td>
                                <td><?php echo $key->mobno2; ?></td>
                                <td><a href="<?php echo base_url().$key->cv; ?>" target="_blank">Preview</a></td>
                                <td><?php echo $key->comments; ?></td>
                                <td><a onclick="return confirm('Are you sure?');" href="<?php echo base_url('admin/delete_career/'.$key->id);?>" class="btn btn-danger">Delete</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
        
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url('admin/add_client');?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <input type="file" name="image" class="form-control">
          </div>
          <div class="form-group">
              <input type="url" name="link" class="form-control" placeholder="Enter Website URL">
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Add Client" class="btn btn-success">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>