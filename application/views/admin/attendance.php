    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Attendance</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('employee/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Attendance
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
                <h4 class="card-title">Employee Attendance</h4>
            </div>
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Employee Name</th>
                                <th>Start Time</th>
                                <th>Break Time Start</th>
                                <th>Break Time End</th>
                                <th>Tea Time Start</th>
                                <th>Tea Time End</th>
                                <th>End Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($attendance as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $key->employee_name;?></td>
                                <td><?php echo $key->start_time;?></td>
                                <td><?php echo $key->break_start;?></td>
                                <td><?php echo $key->break_end;?></td>
                                <td><?php echo $key->tea_break_start;?></td>
                                <td><?php echo $key->tea_break_end;?></td>
                                <td><?php echo $key->end_time;?></td>
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