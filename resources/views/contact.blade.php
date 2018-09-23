@include('includes._menu')
@include('includes._menuverticale')
@include('includes._menuverticaledroite')
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
</div>          </div>
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