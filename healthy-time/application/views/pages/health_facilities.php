<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_bar'); ?>
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

<?php $this->load->view('includes/bottom_bar'); ?>
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