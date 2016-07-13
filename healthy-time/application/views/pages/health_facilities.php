<?php header('Access-Control-Allow-Origin: *'); ?>
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
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/account'; ?>">Signup/Login</a>
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
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/account'; ?>">Signup/Login</a>
        <a class="mdl-navigation__link" href="<?php echo base_url().'application/faq'; ?>">FAQ</a>
    </nav>
  </div>
  <style>
  #map {
		height: 500px;
		width: 90%;
		margin-top: 14px;
		margin-left: 30px;
		}
</style>
  <main class="mdl-layout__content" id="main">
    <div class="page-content">
        <div id="map">

        </div>
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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
var hospitalIcon = '<?php echo base_url() ?>application/assets/img/hospital.png';
function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    label: place.name,
    position: place.geometry.location,
    image: hospitalIcon
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(place.name);
    infowindow.open(map, this);
  });
}

var myLatitude, myLongitude;
var location, map, geocoder;
var latlng = {lat:0, lng: 0};

geocoder = new google.maps.Geocoder();
infowindow = new google.maps.InfoWindow();
map = new google.maps.Marker();

if("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
        myLatitude = position.coords.latitude;
        myLongitude = position.coords.longitude;
        latlng.lat = myLatitude;
        latlng.lng = myLongitude;
        console.log(myLatitude, myLongitude);
    });
} else {
    alert("Please Enable Geolocation or Use An Updated Browser")
}

function initialize() {
		var latlng = new google.maps.LatLng(myLatitude, myLongitude);
		var mapOptions = {
			zoom: 12,
			center: latlng
		}
		map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var marker = new google.maps.Marker({
                position: latlng,
                map: map
        });

        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              infowindow.setContent("Your location:   " + results[1].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert("Reload The Page");
          }
         });

         // Get Nearby Hospitals
        $.ajaxSetup({crossDomain:true});
        var requestUrl = `https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=${myLatitude},${myLongitude}&radius=20000&type=hospital&key=AIzaSyBdRm639y1QHAga8960XXMqvkB90hE8bNE`;
        console.log(requestUrl);
        $.get(requestUrl, function(data){
            console.log(data);
            results = data.results;
            for (var i = 0; i < results.length; i++) {
                 createMarker(results[i]);
            }
        });
}


google.maps.event.addDomListener(window, 'load', initialize);

  
</script>

<?php $this->load->view('includes/footer'); ?>