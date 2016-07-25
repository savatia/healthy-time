<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_bar'); ?>


  <main class="mdl-layout__content" id="main">
    
  </main>

  <style>
  #main {
    background-image: url('<?php echo base_url();?>application/assets/img/home.jpg');
    background-size:cover;
    background-position-y: -77px;
  }
  </style>

<?php $this->load->view('includes/bottom_bar'); ?>
<?php $this->load->view('includes/footer'); ?>
