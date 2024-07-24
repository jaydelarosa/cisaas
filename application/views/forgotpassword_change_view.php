<!-- <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="./assets/img/photos/bg3.jpg"> -->
    <section class="wrapper bg-soft-primary">
      <div class="container pt-17 pb-20 pt-md-5 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- <h1 class="display-1 mb-3">Sign In</h1> -->
            <!-- <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav> -->
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
      <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
          <div class="col-xl-6 offset-xl-2 mx-auto mt-n19">
            <div class="card">
              <div class="row gx-0">
                <div class="col-lg-12 align-self-stretch">

                  <div class="p-10 p-md-11 p-lg-14">
                    <div class="d-flex flex-row">
                      
                      <div class="row">
                        <div class="col-lg-12 col-xl-12">
                          <h2 class="display-4 mb-3 text-center">Reset Password</h2>
                          <p class="lead text-center mb-10"></p>

                          <?php if( $notif != '' AND $notif_type != '' ): ?>
                          <div class="alert alert-<?php echo $notif_type ?> text-center" role="alert">
                            <?php echo $notif ?>
                          </div>
                          <?php endif; ?>

                          <form class="contact-form needs-validation" method="post" action="<?php echo base_url() ?>forgotpassword/change/<?php echo $hash ?>/" novalidate>
                            <div class="messages"></div>
                            <div class="row gx-4">
                              
                              <div class="col-md-6">
                                <div class="form-floating mb-4">
                                  <input id="form_email" type="password" name="password" minlength="6" class="form-control" placeholder="Create Password" required>
                                  <label for="form_email">Create Password</label>
                                  <div class="valid-feedback"> Looks good! </div>
                                  <div class="invalid-feedback"> Please create your password (minimum of 6 characters). </div>
                                </div>
                              </div>
                              <!-- /column -->

                              <div class="col-md-6">
                                <div class="form-floating mb-4">
                                  <input id="form_email" type="password" name="cpassword" minlength="6" class="form-control" placeholder="Confirm Password" required>
                                  <label for="form_email">Confirm Password</label>
                                  <div class="valid-feedback"> Looks good! </div>
                                  <div class="invalid-feedback"> Please confirm your password. </div>
                                </div>
                              </div>
                              <!-- /column -->
                              
                              <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded btn-send mb-3" value="Submit Password" style="width: 100%;">
                                <!-- <p class="text-muted"><a href="<?php echo base_url() ?>forgotpassword">Forgot password?</a></p> -->
                              </div>
                              <!-- /column -->
                            </div>
                            <!-- /.row -->
                          </form>
                          <!-- /form -->
                        </div>
                        <!-- /column -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!--/div -->
                  </div>
                  <!--/div -->
                  
                </div>
                <!--/column -->
                <!-- <div class="col-lg-6">
                  
                </div> -->
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
  </div>
  <!-- /.content-wrapper -->