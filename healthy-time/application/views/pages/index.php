<?php $this->load->view('includes/header'); ?>





<style>
.demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
}

#image {
  background:url('http://localhost/healthy-time/healthy-time/application/assets/img/home.jpg');
}

.mdl-layout__content > .page_content {
  background: url('http://localhost/healthy-time/healthy-time/application/assets/img/home.jpg') center / cover !important;
}
</style>

<div class="demo-layout-waterfall mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--waterfall">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Uliza HealthCare</span>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="waterfall-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="waterfall-exp">
        </div>
      </div>
    </div>
    <!-- Bottom row, not visible on scroll -->
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/home'; ?>">Home</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/chat'; ?>">Chat</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/health_facilities'; ?>">Health Facilities</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/diagnosis'; ?>">Diagnosis</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/login'; ?>">Signup/Login</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/faq'; ?>">FAQ</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Uliza Menu</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/home'; ?>">Home</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/chat'; ?>">Chat</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/health_facilities'; ?>">Health Facilities</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/diagnosis'; ?>">Diagnosis</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/login'; ?>">Signup/Login</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/faq'; ?>">FAQ</a>
    </nav>
  </div>
  <main class="mdl-layout__content" id="main">
    <div class="page-content">
      <img src="">
    </div>
  </main>

  <footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">
      More Information
    </div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li><a href="#">Privacy and Terms</a></li>
      <li><a href="#">User Agreement</a></li>
    </ul>
  </div>
  <div class="mdl-mini-footer__right-section">
    <button class="mdl-mini-footer__social-btn"></button>
    <button class="mdl-mini-footer__social-btn"></button>
    <button class="mdl-mini-footer__social-btn"></button>
  </div>
</footer>
</div>

<?php $this->load->view('includes/footer'); ?>