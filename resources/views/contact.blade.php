@include('layouts.menu')
 
<div class="leave-comment mr0">
                    <div id="googleMap" style="width:100%; height:380px; margin-bottom: 5px"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus aliquam deserunt esse
                        fugit iste magnam, neque nesciunt nihil possimus ratione repellendus veniam vero. Accusamus
                        deleniti deserunt esse illo recusandae.</p>

                    <h3 class="text-uppercase">Send massage</h3>
                    <br>

                    <form class="form-horizontal contact-form" role="form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject"
                                       placeholder="Subject">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
										<textarea class="form-control" rows="6" name="message"
                                                  placeholder="Write Massage" required></textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn send-btn">send massage</button>

                    </form>
                </div>
<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
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
            position: new google.maps.LatLng(23.7893837, 90.38596079999999),
        });

        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content: "Our location!"
        });

        infowindow.open(map, marker);

    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>
@include('layouts.footer')  