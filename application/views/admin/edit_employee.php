    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Edit Employee</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Edit Employee
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
                <h4 class="card-title">Edit Employee</h4>
            </div>
            <div class="card-body collapse in p-2">
              <?php foreach ($employee as $key): ?>
                <form action="<?php  echo base_url('admin/update_employee/'.$key->employee_id);?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <center><img src="<?php echo base_url($key->employee_image);?>" alt=""  style="height:200px;width:200px;border-radius: 50%;border:5px solid #fff;box-shadow: 5px 5px 10px rgba(0,0,0,0.3);"></center>
                    <label>Employee Image <span class="text-danger">*</span></label>
                    <input type="file" name="employee_image" class="form-control">
                     <?php if(isset($employee_image)){echo $employee_image;} ?>
                  </div>
                  <div class="form-group">
                    <label>Employee Name <span class="text-danger">*</span></label>
                    <input type="text" name="employee_name" placeholder="Employee Name" class="form-control" value="<?php echo set_value('employee_name',$key->employee_name); ?>">
                    <?php echo form_error('employee_name'); ?>
                  </div>
                  <div class="form-group">
                    <label>Employee Designation <span class="text-danger">*</span></label>
                    <input type="text" name="employee_designation" placeholder="Employee Designation" class="form-control" value="<?php echo set_value('employee_designation',$key->employee_designation); ?>">
                    <?php echo form_error('employee_designation'); ?>
                  </div>
                  <div class="form-group">
                    <label>Employee Joining Date</label>
                    <input type="date" name="employee_join_date"class="form-control" value="<?php echo set_value('employee_join_date',$key->employee_join_date); ?>">
                    <?php echo form_error('employee_join_date'); ?>
                  </div>
                  <div class="form-group">
                    <label>Employee Mobile Number <span class="text-danger">*</span></label>
                    <input type="text" name="employee_mobno" placeholder="Employee Mobile Number" class="form-control" value="<?php echo set_value('employee_mobno',$key->employee_mobno); ?>">
                    <?php echo form_error('employee_mobno'); ?>
                  </div>
                  <div class="form-group">
                    <label>Employee Email <span class="text-danger">*</span></label>
                    <input type="email" name="employee_email" placeholder="Employee Email" class="form-control" value="<?php echo set_value('employee_email',$key->employee_email); ?>">
                    <?php echo form_error('employee_email'); ?>
                  </div>
                  <div class="form-group">
                    <label>Employee Current Address<span class="text-danger">*</span></label>
                    <textarea name="employee_current_address" placeholder="Employee Current Address" class="form-control"><?php echo set_value('employee_current_address',$key->employee_current_address);?></textarea>
                    <?php echo form_error('employee_current_address'); ?>
                  </div>
                
                <div class="form-group">
                  <center><img src="<?php echo base_url($key->employee_adhar);?>" alt="" style="height:200px;width:200px;"></center>
                  <label>Upload Employee Adhar <span class="text-danger">*</span></label>
                  <input type="file" name="employee_adhar" class="form-control">
                   <?php if(isset($employee_adhar)){echo $employee_adhar;} ?>
                </div>
                <div class="form-group">
                  <label>Create Employee Password <span class="text-danger">*</span></label>
                  <input type="password" name="employee_password" class="form-control" value="<?php echo set_value('employee_password',$key->employee_password);?>">
                  <?php echo form_error('employee_password'); ?>
                </div>
                  <div class="form-group">
                    <input type="submit" value="Update Employee" class="btn btn-success">
                  </div>
                </form>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>