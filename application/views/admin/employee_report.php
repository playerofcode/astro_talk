    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Generate Employee Report</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Generate Employee Report
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
                <h4 class="card-title">Generate Employee Report</h4>
            </div>
            <div class="card-body collapse in p-2">
                <form action="<?php  echo base_url('admin/generate_employee_report');?>" method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label>Employee ID<span class="text-danger">*</span></label>
                    <input type="text" name="employee_id" placeholder="Enter Employee Id" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>From <span class="text-danger">*</span></label>
                    <input type="date" name="start_date" class="form-control" >
                  </div>  
                        <div class="form-group">
                    <label>To <span class="text-danger">*</span></label>
                    <input type="date" name="end_date" class="form-control" >
                  </div>              
                  <div class="form-group">
                    <input type="submit" value="Generate Report" class="btn btn-success">
                  </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>