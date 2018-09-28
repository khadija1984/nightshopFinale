@include('includes._menu')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/images/">
    <title>{{config('app.name'),'NightShop'}} - @yield('title', 'Acueil du site')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('css/styleMenuVerticale.css') }}">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<style>
    #divnavigation{
       
       padding-right:30px;
       padding-top: 50px;
       position: absolute;
       
    }  
    #navigation {
    width: 200px;
    list-style: none;
    text-align: center;
    
    }
    #navigation ul{
        
        
    }
    #navigation li {
        background-color:#729EBF; 
        background-image:-webkit-linear-gradient(top, #729EBF 0%, #333A40 100%);
        background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%);
        border-radius: 6px;
        margin-bottom:2px;
        box-shadow: 3px 3px 3px #999;
        border:solid 1px #333A40
    }
    #navigation a {
        display:block;
        text-decoration: none;
        color: #fff;
        padding: 8px 0;
        font-family: verdana;
        font-size:1.2em
    }
    #navigation ul li a, #navigation li:hover li a {
        font-size:1em
    }
    #navigation li:hover {
        background: #729EBF
    }
    #menu-accordeon ul li:last-child {
        border-radius: 0 0 6px 6px;
        border:none;
    }
    #menu-accordeon li:hover li {
        max-height: 15em;
    }
  #img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}

</style>
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.stickit.min.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<!--main content start-->
<!---@include('includes._slider')--->
<div id="divnavigation">
    <ul id="navigation">
      <li><a href="{{ url('categories/alcools') }}">Alcools</a></li>
      <li><a href="{{ url('categories/softs') }}">Softs</a></li>
      <li><a href="{{ url('categories/packs') }}">Packs</a></li>
      <li><a href="{{ url('categories/divers') }}">Divers</a></li>
    </ul><br>
    <center><div><h4>Nouveau Produit</h4></div></center>
    <div class="row" >
        @foreach ($lasts->slice(0,2) as $last)
            <div style="position:absolute; padding-left: 20px;">
                <center>
                    <a href="{{ route('product.index',['id'=>$last->id]) }}" alt="{{$last->name}}">
                    <img id="img" class="nature" style="height: 200px; width: 200px;"src=" {{$last->image}} " alt="" >
                    </a>
                </center>
            </div>
        @endforeach
    </div>
    
</div>
<div id="divnavigation" style="margin-left:1040px; ">
    <div class="row" >
        @foreach($product as $product)
            @if($product->onDiscount())
            <div style="position:absolute;height: 200px; width:200px; ">
                <center>
                    <span class="bulle bulle-promo">Promo</span>
                    <a href="{{ route('product.index',['id'=>$product->id]) }}" alt="{{$product->name}}">
                    <img id="img" class="nature" style="height: 200px; width:500px;"src=" {{$product->image}} " alt="" >
                    </a>
                </center>
            </div>
            @else
            @foreach($las->slice(0,2) as $v1)
            <div style="position:absolute;height: 200px; width:200px;margin-top: 210px ">
                <center>
                    <span class="bulle bulle-promo">New</span>
                    <a href="{{ route('product.index',['id'=>$product->id]) }}" alt="">
                    <img id="img" class="nature" style="height: 200px; width:500px;"src=" {{$v1->image}} " alt="" >
                    </a>
                </center>
            </div>
           @endforeach
            @endif
        @endforeach
    </div>
  
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjS_CSbi5trGF0aoipisGXuahNiiGL5cM&callback=initMap"
  type="text/javascript"></script>
<script   type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr"></script>


<span style="display:none;" id="text_latlng"></span>
<div id="map-canvas" style="margin-left: 270px;margin-top:20px; height:500px;width:60%"></div>

<div class="div" id="foo" style=" display:none; background: green;margin-left: 270px;margin-right: 270px;margin-top:20px;height:80px">
   <p style="margin-left: 270px;">ici mes adresse de nightshop</p>
</div>
<div class="products"  style="padding-top: 90px">
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
            ['Nightshop6', 50.874252, 4.357736],
            ['Nightshop7', 50.854577, 4.366643],
            ['Nightshop8', 50.851876, 4.368453],
            ['Nightshop9', 50.851535, 4.369438]
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
<footer class="footer-widget-section" style=" margin-top:100px;">
   <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    
                    <div class="about-img"><img src="assets/images/logofooter.png" alt="Kotha"></div>
                    
                    <div class="about-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed voluptua. At vero eos et
                        accusam et justo duo dlores et ea rebum magna text ar koto din.
                    </div>
                    
                    <div class="address">
                        <h4 class="text-uppercase">contact Info</h4>

                        <p> 2,Rue van gulick</p>
                        <p> 1020, Bruxelles</p>

                        <p> Gsm: 0484/28.27.72</p>

                        <p>nightshopenligne@infos.be</p>
                    </div>
                </aside>
            </div>
<!--rajouter foreach sur les produits en promotion--->
            
            <div class="col-md-4">
                <aside class="footer-widget">
                        <li><a href="{{ url('cgv') }}">Conditions générales de vente</a></li>
			<li><a href="{{ url('cgv') }}">FAQ</a></li>
			<li><a href="{{ url('cgv') }}">Politique de confidentialité</a></li>

                </aside>
            </div>

        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2018 <a href="">Night Shop En Ligne</a>,Designed with <i
                            class="fa fa-heart"></i> by <a href="#">Khadija Hamama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>