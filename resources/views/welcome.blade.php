@include('includes._menu')

<!--main content start-->
<!---@include('includes._slider')--->

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjS_CSbi5trGF0aoipisGXuahNiiGL5cM&callback=initMap"
  type="text/javascript"></script>
<script   type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr"></script>

@include('includes._menuverticale')
@include('includes._menuverticaledroite')
<span style="display:none;" id="text_latlng"></span>
<div id="map-canvas" style="margin-left: 270px;margin-top:20px; height:350px;width:60%"></div>

<div class="div" id="foo" style=" display:none; background: green;margin-left: 270px;margin-right: 270px;margin-top:20px;height:80px">
   <p style="margin-left: 270px;">ici mes adresse de nightshop</p>
</div>
<div class="products"  style="padding-top: 200px">
<div class="row">
             @foreach($related as $product) 
		<div class="col-md-3">
                    <div>
                            <!--  <span class="bulle">Infos</span> -->
                            @if($product->onDiscount())
                            <span  class="bulle bulle-promo">Promo</span>
                            @endif
                            <a href="{{ route('product.index',['id'=>$product->id]) }}"><img src="{{URL($product->image)}}" alt="{{$product->name}}"></a>

                            <h4>{{$product->name}}</h4>
                            <p> {{ str_limit($product->description,50) }}</p>
                            <div class="actions">
                                @if($product->onDiscount())
                                <span class="price promo">{{$product->prix}} € </span>  <em class="promo">{{$product->prixVente()}} €</em>
                                @else
                                <span class="price ">{{$product->prixVente()}} € </span>
                                @endif

                                <a href="{{route('panier.add',['name'=>$product->name])}}" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>

                                <a href="{{ route('product.index',['id'=>$product->id]) }}" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>

                                 <a href="#" class="btn btn-icon btn-secondary  like" alt="favoris" data-id=><i class="fa fa-heart"></i></a>


                                <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id= ><i class="fa fa-heart"></i></a>


                    </div>
                </div>
		</div>
             @endforeach            
    	</div>
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
    function initialiserCarte(location) {

        var currentLocation = new google.maps.LatLng(location.coords.latitude, location.coords.longitude);
        var mapOptions = {
            center: currentLocation,
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
            
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
   
        var marker = new google.maps.Marker({
            position:currentLocation,
            map:map

        });
        
        var locations = [
            
            ['Nightshop2', 50.873729, 4.358945],
            ['Nightshop1', 50.875534, 4.353314],
            ['Nightshop3', 50.874038, 4.357298],
            ['Nightshop4', 50.87426, 4.356801],
            ['Nightshop5', 50.879269, 4.347562],
            ['Nightshop6', 50.874252, 4.357736]
             ];
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
        };
      })(marker, i));
    };
  
}
$(document).ready(function(){
    
    navigator.geolocation.getCurrentPosition(initialiserCarte);
});
// Lancement de la construction de la carte google map
google.maps.event.addDomListener(window, 'load', function(){initialiserCarte(location, loc)});

</script>
<!-- js files -->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.stickit.min.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>

@include('includes._footer')