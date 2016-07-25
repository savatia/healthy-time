<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_bar'); ?>

  <style>
  .mdl-layout__content {
    padding-top: 14px;
    margin-left: 20%;
    margin-right: 20%;
  }
  </style>
  <main class="mdl-layout__content" id="main">
    <div class="page-content" >
        <?php $this->load->view('includes/chat_layout'); ?>
    </div>
  </main>
<?php $this->load->view('includes/bottom_bar'); ?>
<?php $this->load->view('includes/footer'); ?>