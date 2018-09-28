@include('includes._menu')
    <div class="container">
        <div class="row pub ">
           <h4>Paiement / Confirmation</h4>
        </div>

	
        <div class="row pub panier">
          <div class="row">
            <h3>Confirmation de paiement : </h3>
          </div>
          <div class="row">
    				
    				<p>Merci d'avoir choisi notre site pour vos achats .</p>
    				<p>Nous sommes heureux de vous confirmer votre commande N° <strong>{{$panier->id }} </strong>: et la validation de la transaction : <strong>{{$charge['id']}}</strong> </p>
    				<p>Les détails supplémentaires sont disponibles dans votre <a href="">compte personnel</a>.</p>

            <p> <a href="{{ url('/categories/alcools') }}" class="btn btn-icon btn-primary"><i class="fa fa-reply"></i><span>Retour au catalogue</span></a></p>
          </div>
        </div>

        
    </div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    (function() {
        Stripe.setPublishableKey('pk_test_lxICAjcOpf3RfoIBbKk4Qz9o');
    })();
</script>
<!-- 
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('js/stripe.js') }}"></script> -->
<footer class="footer-widget-section" style=" margin-top:50px;">
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