<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo isset($meta_desc) ? $meta_desc : 'An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.' ; ?>">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title><?php echo isset($meta_title) ? $meta_title : 'Web Application' ; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors/purple.css">
  <link rel="preload" href="<?php echo base_url() ?>assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
</head>

<body>
  <div class="">
    <div class="content-wrapper">
      <header class="wrapper">
        

        <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
          <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
              <a href="./index.html">
                <img src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" />
              </a>
            </div>
            <div class="navbar-collapse offcanvas-nav">
              <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
              </div>
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li>

                <?php if($this->session->userdata('user_id')!=''): ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>logout">Logout</a></li>
                <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>Login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>Signup">Sign Up</a></li>
                <?php endif; ?>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
            
          </div>
          <!-- /.container -->
          </nav>
        <!-- /.navbar -->


                
      </header>
      <!-- /header -->