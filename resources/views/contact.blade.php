@include('includes._menu')
<script src="https://www.w3schools.com/lib/w3.js"></script>
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
                    <a href="{{ route('product.index',['id'=>$v1->id]) }}" alt="">
                    <img id="img" class="nature" style="height: 200px; width:500px;"src=" {{$v1->image}} " alt="" >
                    </a>
                </center>
            </div>
           @endforeach
            @endif
        @endforeach
    </div>
</div> 
<div class="leave-comment mr0" style="padding-bottom: 900px;height:300px; width: 55%; margin-left: 300px ">
                <div id="googleMap" style="width:100%; height:300px; margin-bottom: 5px"></div>
                <div style="margin-bottom:100px;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus aliquam deserunt esse
                        fugit iste magnam, neque nesciunt nihil possimus ratione repellendus veniam vero. Accusamus
                        deleniti deserunt esse illo recusandae.</p>

                    <h3 class="text-uppercase">Envoyer un message</h3>
                    <div class="container">
                            @include('flash::message')
                    </div>
                    <br>
                    <form class="form-horizontal contact-form" role="form" method="post" action="{{ action('HomeController@postcontact') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="nom"
                                       placeholder="Nom" value="{{old('nom')}}" >
                            </div>
                        </div>
                        @if($errors->has('nom'))
                        <span class='help-block'>
                            <strong>{{ $errors->first('nom')}}</strong>
                        </span>
                        @endif
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email" value="{{old('email')}}" >
                            </div>
                        </div>
                        @if($errors->has('email'))
                        <span class='help-block'>
                            <strong>{{ $errors->first('email')}}</strong>
                        </span>
                        @endif
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="subject" name="objet"
                                       placeholder="Sujet" value="{{old('objet')}}">
                            </div>
                        </div>
                        @if($errors->has('objet'))
                        <span class='help-block'>
                            <strong>{{ $errors->first('objet')}}</strong>
                        </span>
                        @endif
                        <div class="form-group">
                            <div class="col-md-12">
			<textarea class="form-control" rows="6" name="content"
                                         placeholder="Ecrire votre message ici"  >{{old('content')}}</textarea>
                            </div>
                            @if($errors->has('content'))
                        <span class='help-block'>
                            <strong>{{ $errors->first('content')}}</strong>
                        </span>
                        @endif
                        </div>
                        <button type="submit" name="submit" class="btn send-btn">Envoyer</button>

                    </form>
             </div>
</div>                
   
<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxXNz1IIB_4NBYS1jy5LbsFEgObeKJR2k&callback=initMap"
  type="text/javascript"></script>
<script type="text/javascript">
    /* ==== google map ====*/
    function initialize() {
        var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(50.872991, 4.357095),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };

        var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(50.872991,  4.357095),
            
        });

        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content: "Nous somme ici!"
        });

        infowindow.open(map, marker);

    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>

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