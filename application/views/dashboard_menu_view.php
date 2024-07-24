<style>
  .round-c{
    border-radius:50%;
    overflow:hidden;
  }
  .round-c img{
    max-width: 100%;
    height: auto;
    display: block;
  }
</style>
<div class="widget pb-3">
  <a href="<?php echo base_url() ?>profile">
  <div class="round-c w-14 h-14 mb-2">
    <img src="<?php echo base_url() ?>data/<?php echo ( $this->session->userdata('profile_picture')!='') ?  $this->session->userdata('profile_picture') : 'no-avatar.png' ; ?>" alt="" />
  </div>
  </a>

  <h6 class="widget-title fs-18 mb-4">Welcome <?php echo $this->session->userdata('first_name') ?>!</h6>
  <nav id="collapse-usage">
    <ul class="list-unstyled fs-md lh-sm text-reset">
      <li><a href="<?php echo base_url() ?>dashboard">Dashboard</a></li>
      <li><a href="<?php echo base_url() ?>profile">Profile</a></li>
      <li><a href="<?php echo base_url() ?>search">Search</a></li>
    </ul>
  </nav>
  <!-- /nav -->
</div>  