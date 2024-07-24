

<section class="wrapper bg-gradient-primary">
  <div class="container py-14 pt-md-15 pb-md-18">
    
    <div class="row text-center">
      <div class="col-md-6 offset-md-3">

        <div class="bg-white p-8 border rounded-2">

          <div class="row">
            <div class="col-lg-12">
              <h2 class="display-4 mb-3 text-center">Login</h2>
              <p class="lead text-center mb-10">Enter your username and password.</p>
              <form class="" method="post" action="<?php echo base_url() ?>login" novalidate="">
                <div class="messages"></div>
                

                <?php if( isset($notif) AND !empty($notif) ): ?>
                <div class="alert alert-<?php echo $notif_type ?> text-start" role="alert">
                  <?php echo $notif ?></a>
                </div>
                <?php endif; ?>

                <div class="row gx-4">
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input id="form_name" type="email" name="email" class="form-control" placeholder="Jane" required="">
                      <label for="form_name">Email *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your email. </div>
                    <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;" data-lastpass-icon-root=""></div></div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input id="form_lastname" type="password" name="password" class="form-control" placeholder="Doe" required="">
                      <label for="form_lastname">Password *</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your password. </div>
                    </div>
                  </div>
                  <!-- /column -->
                  
                  <div class="col-12 text-center">
                    <input type="submit" class="btn w-100 btn-primary rounded-pill btn-send mb-3" value="Submit">
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

