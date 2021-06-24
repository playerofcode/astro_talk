    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Astrologer Info</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Astrologer Info
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
           <!--  <div class="card-header">
                <h4 class="card-title"><?php echo $key->subject; ?></h4>
            </div> -->
             <?php foreach ($astrologer as $key): ?>
            <div class="card-body collapse in p-2 text-center">
                <table class="table table-bordered">
                  <tr>
                    <td>Astrologer Image</td>
                    <td><img src="<?php echo base_url($key->photo);?>" style="height:200px;width:200px;border-radius: 50%;border:5px solid orange;"></td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td><?php echo $key->name;?></td>
                  </tr>
                  <tr>
                    <td>Age</td>
                    <td><?php echo $key->age;?></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td><?php echo $key->gender;?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?php echo $key->email;?></td>
                  </tr>
                  <tr>
                    <td>Phone Number</td>
                    <td><?php echo $key->phone_no;?></td>
                  </tr>
                   <tr>
                    <td>Alternate Number</td>
                    <td><?php echo $key->alternate_no;?></td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td><?php echo $key->dob;?></td>
                  </tr>
                  <tr>
                    <td>Experience</td>
                    <td><?php echo $key->experience;?></td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td><?php echo $key->city;?></td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td><?php echo $key->address;?></td>
                  </tr>
                  <tr>
                    <td>PAN Number</td>
                    <td><?php echo $key->pan_card_no;?></td>
                  </tr>
                   <tr>
                    <td>Bank Name</td>
                    <td><?php echo $key->ac_name;?></td>
                  </tr>
                  <tr>
                    <td>IFSC Code</td>
                    <td><?php echo $key->ifsc_code;?></td>
                  </tr>
                  <tr>
                    <td>Account Number</td>
                    <td><?php echo $key->ac_no;?></td>
                  </tr>
                  <tr>
                    <td>Category</td>
                    <td><?php echo $key->category;?></td>
                  </tr>
                  <tr>
                    <td>Short Bio</td>
                    <td><?php echo $key->short_bio;?></td>
                  </tr>
                  <tr>
                    <td>Long Bio</td>
                    <td><?php echo $key->long_bio;?></td>
                  </tr>
                  <tr>
                    <td>Skills</td>
                    <td><?php echo $key->skills;?></td>
                  </tr>
                  <tr>
                    <td>Language</td>
                    <td><?php echo $key->language;?></td>
                  </tr>
                  <tr>
                    <td>Report Charge</td>
                    <td><?php echo $key->report_charge;?></td>
                  </tr>
                  <tr>
                    <td>Call Charge</td>
                    <td><?php echo $key->call_charge;?></td>
                  </tr>
                  <tr>
                    <td>ID Proof</td>
                    <td><a target="_blank" href="<?php echo base_url($key->id_proof);?>">View</a></td>
                  </tr>
                  <tr>
                    <td>Join Date</td>
                    <td><?php echo $key->date;?></td>
                  </tr>
                </table>
            </div>
             <?php endforeach ?>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>