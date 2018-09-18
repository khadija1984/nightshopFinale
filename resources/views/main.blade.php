
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
        geocoder = new google.maps.Geocoder();
        // Ici j'ai mis la latitude et longitude du vieux Port de Marseille pour centrer la carte de départ
        var latlng = new google.maps.LatLng(50.848650, 4.354684);
        var mapOptions = {
          zoom      : 14,
          center    : latlng,
          mapTypeId : google.maps.MapTypeId.ROADMAP
        }
        // map-canvas est le conteneur HTML de la carte Google Map
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
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
    }
    
    
      // Lancement de la construction de la carte google map
    google.maps.event.addDomListener(window, 'load', initialiserCarte);
</script>
<!-- js files -->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.stickit.min.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
