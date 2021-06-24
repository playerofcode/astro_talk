    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Enquiry Popup</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Enquiry Popup
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
                <h4 class="card-title">Enquiry Popup</h4>
            </div>
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($enquiry_popup as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $key->name;?></td>
                                <td><?php echo $key->status;?></td>
                                <td>
                                <form action="<?php echo base_url('admin/change_enuqiry_popup_status'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $key->id;?>">
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option value="active">active</option>
                                            <option value="deactive">deactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Change Status" class="btn btn-primary btn-sm">
                                    </div>
                                </form>
                                </td>
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