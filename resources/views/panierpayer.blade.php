@include('includes._menu')

<style>
  #Btn-stripe .stripe-button-el span {
    height: 200px;
    width: 200px;
    line-height: 50px;
    background-image: url(http://localhost/nightshopFinale/public/assets/images/cartes.jpg);
}   
</style>
 <div class="container">
        <div class="row pub ">
           <h4>Panier / Paiement </h4>
        </div>
	
       <div class="row pub panier">
          <div class="row">
               <div class="col-md-6 cell example example2" id ="Btn-stripe">
                  <h3>Paiment avec carte</h3>
                    <hr>
                  <form action="{{route('checkout.stripe')}}" method="POST">
              
                      {{csrf_field()}}
                      <script
                              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                              data-key="pk_test_lxICAjcOpf3RfoIBbKk4Qz9o"
                              data-amount="{{ $panier * 100 }}"
                              data-name="E-Shop"
                              data-description="Site de vente en ligne"
                              data-image="{{ URL('http://localhost/nightshopFinale/public/assets/images/logo.png')}}"
                              data-locale="auto"
                              data-currency="eur">
                      </script>
                  </form>
                </div>

              <div class="col-md-6 col-md-6 cell example example2" id ="Btn-paypal" >
                <h3>Paiement par Paypal</h3>
                <hr>
                <a href="{{route('checkout.paypal')}}" class="link">
                  <img src="http://localhost/nightshopFinale/public/assets/images/paypal.jpg" alt="paypal">
                </a>
              </div>
          </div>

        </div>

 </div>



<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    (function() {
        Stripe.setPublishableKey('pk_test_lxICAjcOpf3RfoIBbKk4Qz9o');
    })();
</script>
<script type="text/javascript" src="{{ asset('js/stripe.js') }}"></script> 	

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
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



