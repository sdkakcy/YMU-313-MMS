<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/mapstyle.css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChbJD07tTddH2GQydRBu6YM7h0Rh0UZJ4" type="text/javascript"></script>



</head>
<body >
    <div class="mhead"><h2>google maps integrasyonu</h2></div>
	<div id="mapform">
<form class="mapinfo" method="POST" action="/map">

  {{ csrf_field() }}
<label>Address</label>
<input type="text" id="address" name="address" />
</br>
<label>city</label>
<input type="text" id="city" name="city" />
</br><label>state</label>
<input type="text" id="state" name="state" />
</br><label>country</label>
<input type="text" id="country" name="country" />
</br><label>zip</label>
<input type="text" id="zip" name="zip" />
</br>
<input type="submit" id="submit" name="submit" />
</form>
</div>

<?php
if(isset($_POST['submit'])){
$add = urlencode($_POST['address']);
$city = urlencode($_POST['city']);
$state = urlencode($_POST['state']);
$country  = urlencode($_POST['country']);
$zip = $_POST['zip'];

$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$city.',+'.$state.',+'.$country.'&sensor=false');

$output= json_decode($geocode); //Store values in variable
 // print_r($output);
if($output->status == 'OK'){ // Check if address is available or not
echo "<div class=\"display_map_details\">";
echo "<br/>";
echo "Latitude : ".$lat = $output->results[0]->geometry->location->lat; //Returns Latitude
echo "<br/>";
echo "Longitude : ".$long = $output->results[0]->geometry->location->lng; // Returns Longitude
echo "<br/>";
echo "Address : ".$loc=$output->results[0]->formatted_address;
echo "</div>";
}

?>
<script type="text/javascript">
$(document).ready(function () {
function initialize() {

// Define the latitude and longitude positions
var latitude = parseFloat("<?php echo $lat; ?>"); // Latitude get from above variable
var longitude = parseFloat("<?php echo $long; ?>"); // Longitude from same
var latlngPos = new google.maps.LatLng(latitude, longitude);

// Set up options for the Google map
var myOptions = {
zoom: 13,
center: latlngPos,
mapTypeId: google.maps.MapTypeId.ROADMAP,
zoomControlOptions: true,
zoomControlOptions: {
style: google.maps.ZoomControlStyle.LARGE
}
};
// Define the map
map = new google.maps.Map(document.getElementById("display_map"), myOptions);

// // Add the marker
 var marker = new google.maps.Marker({
 position: latlngPos,
 map: map,
 draggable: true,
 icon:'pinkball.png',
 title: "<?php echo $loc; ?>"
 });


 var infowindow = ->name('map')new google.maps.InfoWindow({
  content:"<?php echo $loc; ?>"
   });
  addMarker(latlngPos, 'Default Marker', map);

  google.maps.event.addListener(map, 'dragstart', function(event) {
  infowindow.open(map,marker);
      addMarker(event.latlngPos, 'Click Generated Marker', map);

	   var lat, lng, address;

  });


}
  function addMarker(latlng,title,map) {
    var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: title,
	    icon:'map-red.png',
            draggable:true,
	    animation: google.maps.Animation.DROP
    });

    google.maps.event.addListener(marker,'drag',function(event) {
        document.getElementById('lat').value = event.latLng.lat();
        document.getElementById('lng').value= event.latLng.lng();
    });

    google.maps.event.addListener(marker,'dragend',function(event) {
        document.getElementById('lat').value = event.latLng.lat();
        document.getElementById('lng').value = event.latLng.lng();
		alert(marker.getPosition());
    });
	   google.maps.event.addListener(map, 'zoom_changed', function () {
      document.getElementById('zoom').value =map.getZoom();
    });

}
google.maps.event.addDomListener(window, 'load', initialize);
});
</script>
<?php } ?>
<div id="display_map" style="width:450px;height:350px; "></div>
<div class="map_values">
<label>Latitude:</label>
<input type="text" id="lat" name="lat" value=""/>
<label>Longitude:</label>
<input type="text" id="lng" name="lng" value="" />
<label>Zoom:</label>
<input type="text" id="zoom" name="zoom" value="" />
</div>
</body>
</html>
