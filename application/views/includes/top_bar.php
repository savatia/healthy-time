<style>
.demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
}

#image {
  background:url('/application/assets/img/home.jpg');
}

.mdl-layout__content > .page_content {
  background: url('/application/assets/img/home.jpg') center / cover !important;
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
        <a class="mdl-navigation__link" href="/">Home</a>
        <a class="mdl-navigation__link" href="/dashboard">Dashboard</a>
        <a class="mdl-navigation__link" href="/activity">Activities</a>
        <a class="mdl-navigation__link" href="/prizes">Prizes</a>
        <a class="mdl-navigation__link" href="/health_facilities">Health Facilities</a>
        <a class="mdl-navigation__link" href="/faq">FAQ</a>
        <a class="mdl-navigation__link" href="/account'">Signup/Login</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Uliza Menu</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="/">Home</a>
        <a class="mdl-navigation__link" href="/dashboard">Dashboard</a>
        <a class="mdl-navigation__link" href="/activity">Activities</a>
        <a class="mdl-navigation__link" href="/prizes">Prizes</a>
        <a class="mdl-navigation__link" href="/health_facilities">Health Facilities</a>
        <a class="mdl-navigation__link" href="/faq">FAQ</a>
        <a class="mdl-navigation__link" href="/account">Signup/Login</a>
    </nav>
  </div>
