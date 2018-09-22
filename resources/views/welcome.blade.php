@include('includes._menu')
@include('includes._menuverticale')
@include('includes._menuverticaledroite')
<html>
    <body>
<!--main content start-->
<!---@include('includes._slider')--->

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjS_CSbi5trGF0aoipisGXuahNiiGL5cM&callback=initMap"
  type="text/javascript"></script>
<script   type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr"></script>
<form style="padding-left: 270px">
  <input type="text" id="adresse"/>
  <input type="button" id="button"  value="Localiser sur Google Map" onclick="TrouverAdresse(); "/>
</form>
<span style="display:none;" id="text_latlng"></span>
<div id="map-canvas" style="margin-left: 270px;margin-top:30px; height:300px;width:60%"></div>

<div class="div" id="foo" style=" display:none; background: green;margin-left: 270px;margin-right: 270px;margin-top:20px;height:80px">
   <p style="margin-left: 270px;">ici mes adresse de nightshop</p>
</div>
@foreach($users as $user)


<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){   
        
    $("#button").click(function(){
        $('#foo').show();
    });  
    
});
</script>


<script type="text/javascript">
    var geocoder;
    var map;
    // initialisation de la carte Google Map de départ
    function initialiserCarte() {
          var locations = [
            ['Nightshop1', {{$user->latitude}}, {{$user->longitude}}],
            ['Coogee Beach', 50.874853, 4.355775]
             ];
             
             
      
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 14,
        center: new google.maps.LatLng(50.872930, 4.357095),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
       var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'

        
      });
      

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(50.872930, 4.357095),
        map: map
      });
 }
       function TrouverAdresse() {
        // Récupération de l'adresse tapée dans le formulaire
        var adresse = document.getElementById('adresse').value;
        geocoder.geocode( { 'address': adresse}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            // Récupération des coordonnées GPS du lieu tapé dans le formulaire
            var strposition = results[0].geometry.location+"";
            strposition=strposition.replace('(', '');
            strposition=strposition.replace(')', '');
            // Affichage des coordonnées dans le <span>
            document.getElementById('text_latlng').innerHTML='Coordonnées : '+strposition;
            // Création du marqueur du lieu (épingle)
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
          } else {
            alert('Adresse introuvable: ' + status);
          }
        });
        marker.setMap(map);
        }
 // Lancement de la construction de la carte google map
    google.maps.event.addDomListener(window, 'load', initialiserCarte, TrouverAdresse);
</script>

<!-- js files -->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.stickit.min.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
@endforeach
@include('includes._footer')