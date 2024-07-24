
<style>
      .image-container {
          position: relative;
          width: 100%;
          height: 200px; /* Set a fixed height for each image container */
          overflow: hidden;
          margin-bottom: 15px; /* Adjust margin as needed */
      }

      .image-container img {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          max-width: 100%;
          max-height: 100%;
          width: auto;
          height: auto;
      }
  </style>
<section class="wrapper bg-gradient-primary">
  <div class="container py-14 pt-md-15 pb-md-18">
    
    <div class="row">
      <div class="col-md-2">

          <?php $this->load->view('dashboard_menu_view'); ?>

      </div>
      <div class="col-md-10">

        <div class="bg-white p-8 border rounded-2 min-vh-50">

          <div class="row">
            <div class="col-lg-12">
              
              <h2 class="display-4 mb-3 ">Search</h2>

                <form action="<?php echo base_url() ?>search" method="post">
                  <div class="form-floating mb-4">
                    <input id="form_name" type="text" name="search" class="form-control" placeholder="Search pixabay images.." required="" value="">
                    <label for="form_name">Search pixabay images..</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Search pixabay images... </div>
                  <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;" data-lastpass-icon-root=""></div></div>
                </form>

                <div class="row">
                  <?php if( count($pixabay_results) > 0 ): ?>
                  <?php foreach( $pixabay_results as $img ): ?>
                    <div class="col-md-3">

                      <a href="<?php echo $img['largeImageURL'] ?>" target="_blank">
                      <div class="image-container">
                        <img src="<?php echo $img['previewURL'] ?>" alt="">
                      </div>
                      </a>

                    </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              
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

