<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget about-me-widget">
                        <div class="about-me-img">

                            <div class="about-me-content text-center">
                                <img src="assets/images/" alt="" class="img-me">

                                <h3 class="text-uppercase">Chercher Un nightShop</h3>
                            <form  class="pub form-custom form-horizontal" method="POST" action="">
              
                              <div class="form-group row"> 
                                  <label for="" class="col-sm-2 col-form-label">Adresse</label><br>
                                <div class="col-sm-10">
                                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                         <div class="input-group-addon"><i class="fa fa-user" ></i></div>
                                        <input type="text" class="form-control" id="username" name="" placeholder="" value="" required autofocus>
                                    </div> 
                 
                                </div>
                              </div>
                                  <button type="submit" name="submit" class="btn send-btn">Chercher</button>

                                </form>
                            </div>
                        </div>
                    
                    </aside>
                    
                </div>
            </div>
            <div class="col-md-8">
                
                    <div class="post-thumb">
                        <div id="googleMap" style="width:100%; height:380px; margin-bottom: 5px"></div>
                        
                        
                    </div>
                   

             </div>
    </div>
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
            center: new google.maps.LatLng(23.7893837, 90.38596079999999),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };

        var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(50.872991,  4.357095),
        });

        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content: ""
        });

        infowindow.open(map, marker);

    }
    
    google.maps.event.addDomListener(window, 'load', initialize);

</script>
