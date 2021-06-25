    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Pooja Booking</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Pooja Booking
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
                <h4 class="card-title">All Pooja Booking</h4>
            </div>
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Pooja Name</th>
                                <th>Pooja Location</th>
                                <th>Priest Preference</th>
                                <th>Pooja Date</th>
                                <th>Pooja Time</th>
                                <th>Pooja Price</th>
                                <th>Name</th>
                                <th>Mobile No.</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Note</th>
                                <th>DateTime</th>
                                <th>Approval</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($pooja_booking as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $key->puja_name;?></td>
                                <td><?php echo $key->puja_location;?></td>
                                <td><?php echo $key->priest_preference;?></td>
                                <td><?php echo $key->puja_date;?></td>
                                <td><?php echo $key->puja_time;?></td>
                                <td><?php echo $key->puja_price;?></td>
                                <td><?php echo $key->name;?></td>
                                <td><?php echo $key->mobno;?></td>
                                <td><?php echo $key->email;?></td>
                                <td><?php echo $key->country;?></td>
                                <td><?php echo $key->state;?></td>
                                <td><?php echo $key->city;?></td>
                                <td><?php echo $key->pincode;?></td>
                                <td><?php echo $key->note;?></td>
                                <td><?php echo $key->date;?></td>
                                <td><a onclick="#"href="<?php echo base_url('admin/confirm_booking_status/'.$key->id);?>" class="btn btn-sm <?php if($key->status=='confirm'):echo 'btn-success';else:echo 'btn-danger';endif;?>" title="Click here to confirm"><?php echo $key->status;?></a></td>
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
