<?php $this->load->view('includes/header'); ?>
  <?php $this->load->view('includes/top_bar')?>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#login" class="mdl-tabs__tab is-active">Login</a>
      <a href="#signup" class="mdl-tabs__tab">Signup</a>
  </div>	

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
             <a href =" login_signup.php" id="signup">Register</a>
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

  <?php $this->load->view('includes/bottom_bar')?>

<?php $this->load->view('includes/footer'); ?>