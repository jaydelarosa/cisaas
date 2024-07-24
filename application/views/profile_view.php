

<section class="wrapper bg-gradient-primary">
  <div class="container py-14 pt-md-15 pb-md-18">
    
    <div class="row">
      <div class="col-md-2">

          <?php $this->load->view('dashboard_menu_view'); ?>

      </div>
      <div class="col-md-10">

        <div class="bg-white p-8 border rounded-2">

          <div class="row">
            <div class="col-lg-12">
              <h2 class="display-4 mb-3 ">Profile</h2>
              <p class="lead  mb-10">Edit my profile details</p>
              <form class="" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>profile">
                <div class="messages"></div>

                <?php if( isset($notif) AND !empty($notif) ): ?>
                <div class="alert alert-<?php echo $notif_type ?> text-start" role="alert">
                  <?php echo $notif ?></a>
                </div>
                <?php endif; ?>
                
                <div class="row gx-4">
                  <div class="col-md-6">
                      <p class="mb-1">Upload Image</label>
                      <input class="form-control" name="profile_picture" type="file" id="formFile" accept="image/*">
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <p class="mb-1">Email *</p>
                    <div class="form-floating mb-4">
                      <input id="form_name" type="email" name="email" class="form-control" placeholder="Please enter your email." required="" value="<?php echo $account_profile[0]['email'] ?>">
                      <label for="form_name">Email *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your email. </div>
                    <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;" data-lastpass-icon-root=""></div></div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <p class="mb-1">First Name *</p>
                    <div class="form-floating mb-4">
                      <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Please enter your first name." required="" value="<?php echo $account_profile[0]['first_name'] ?>">
                      <label for="form_name">Email *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your first name. </div>
                    <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;" data-lastpass-icon-root=""></div></div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                  <p class="mb-1">Last Name *</p>
                    <div class="form-floating mb-4">
                      <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Please enter your last name." required="" value="<?php echo $account_profile[0]['last_name'] ?>">
                      <label for="form_lastname">Password *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your last name. </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <p class="mb-1">Current Password</p>
                    <div class="form-floating mb-4">
                      <input id="form_lastname" type="password" name="password" class="form-control" placeholder="Doe">
                      <label for="form_lastname"></label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your password. </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <p class="mb-1">New Password</p>
                    <div class="form-floating mb-4">
                      <input id="form_lastname" type="password" name="password" class="form-control" placeholder="Doe">
                      <label for="form_lastname"></label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your password. </div>
                    </div>
                  </div>
                  <!-- /column -->
                  
                  <div class="col-12 ">
                    <input type="submit" class="btn w-100 btn-primary rounded-pill btn-send mb-3" value="Save Profile">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </form>
              <!-- /form -->
            </div>
            <!-- /column -->
          </div>

        </div>

      </div>
    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

