


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
      
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/diagnosis'; ?>">Pending Activities</a>
         <a class="mdl-navigation__link" href="<?php echo base_url().'application/diagnosis'; ?>">Points</a>
        
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/account'; ?>">Signup/Login</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/faq'; ?>">FAQ</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Uliza Menu</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/home'; ?>">Home</a>
  
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/diagnosis'; ?>"> Pending Activities</a>
               <a class="mdl-navigation__link" href="<?php echo base_url().'application/diagnosis'; ?>">Points</a>
      
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/account'; ?>">Signup/Login</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/faq'; ?>">FAQ</a>
    </nav>
  </div>




<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Events</h2>
  </div>
  <div class="mdl-card__supporting-text">
   here are some of the events that you need
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
    View Events
    </a>
  </div>
</div>


<!-- test -->

<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col">4
  </div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
</div>

<!-- test -->



<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Chats</h2>
  </div>
  <div class="mdl-card__supporting-text">
   here are some of the events that you need
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
    View Events
    </a>
  </div>
</div>

<main class="mdl-layout__content" id="main">
  <style>
  .mdl-tabs {
    align-items: center;
    justify-content: center;
  }
  .mdl-layout__content {
    padding-top: 14px;
    display:flex;
    justify-content:center;
  }
  </style>
 
  
</main>
<?php $this->load->view('includes/bottom_bar'); ?>
<?php $this->load->view('includes/footer'); ?>
