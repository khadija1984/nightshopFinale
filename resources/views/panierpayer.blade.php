@include('includes._menu')
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
                              data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                              data-locale="auto"
                              data-currency="eur">
                      </script>
                  </form>
                </div>

              <div class="col-md-6 col-md-6 cell example example2" id ="Btn-paypal" >
                <h3>Paiement par Paypal</h3>
                <hr>
                <a href="{{route('checkout.paypal')}}" class="link">
                  <img src="http://assets/images/paypal.jpg" alt="paypal">
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
@include('includes._footer')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>




