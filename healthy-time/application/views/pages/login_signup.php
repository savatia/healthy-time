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

 <h2>Welcome <?php //echo $username; ?>!</h2>
   <a href="home/logout">Logout</a>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#login" class="mdl-tabs__tab is-active">Login</a>
      <a href="#signup" class="mdl-tabs__tab">Signup</a>
  </div>

		

<h1>Customer Login</h1>
Please enter your username and password to log into the websites. If you do not have an account, you can get one for free by <a href="register.php">registering</a>.
<p>
<?php
if(isset($_GET['error'])) {
echo "<strong>Incorrect username/password</strong>";
}
?>
 <!--  // end test -->
  <?php 
  echo validation_errors(); 
  ?>
  <?php
  echo form_open('application/login');
  ?>
   
  <div class="mdl-tabs__panel is-active" id="login">
    <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
	<main class="mdl-layout__content">
		<div class="mdl-card mdl-shadow--6dp">
			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
				<h2 class="mdl-card__title-text">Login</h2>
			</div>
	  	<div class="mdl-card__supporting-text">
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" id="phonenumer" name="phonenumber" />
						<label class="mdl-textfield__label" for="phonenumber">PhoneNumber</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="password" id="password" name="password" />
						<label class="mdl-textfield__label" for="password">Password</label>
					</div>
				</form>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Log in</button>
			</div>
		</div>
	</main>
</div>
  </div>
  <?php
    echo form_close();
  ?>
  <?php
  echo form_open('application/register');
  ?>
  <div class="mdl-tabs__panel" id="signup">
    <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
	<main class="mdl-layout__content">
		<div class="mdl-card mdl-shadow--6dp">
			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
				<h2 class="mdl-card__title-text">Signup</h2>
			</div>
	  	<div class="mdl-card__supporting-text">
				<form action="#">
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" id="phonenumber" name="phonenumber" />
						<label class="mdl-textfield__label" for="phonenumber">PhoneNumber</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="password" id="password" name="password" />
						<label class="mdl-textfield__label" for="password">Password</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" type="password" id="confirm_password" />
						<label class="mdl-textfield__label" for="confirm_password">Confirm Password</label>
					</div>
				</form>
			</div>
			<div class="mdl-card__actions mdl-card--border">
				<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Sign Up</button>
			</div>
		</div>
	</main>
</div>
  <?php
    echo form_close();
  ?>

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
