@include('includes._menu')

<link rel="stylesheet" href="{{ asset('css/stylefiche.css') }}">
 <div class="container">
        <div class="row pub ">
           <h4>Panier</h4>
        </div>
	
	@if($panier->count() == 0)
		<div class="row pub">

	        <p>Votre panier est vide 
	        <a href="{{ url('/categories/alcools') }}" class="btn btn-icon btn-primary "><i class="fa fa-reply"></i><span>Retour au catalogue</span></a></p>
	         
	    </div>
	@else
		<table class="table  table-responsive" id="panier">
			<thead class="thead-default">
				<tr>
					<th>#</th>
					<th>Produit</th>
					<th>Quantité</th>
					<th>Prix Unit. HT</th>
					<th>Prix total HT</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
					@php
						$index=1;
					@endphp
					@foreach ($panier as $product)
					<tr>
						<td scope="row">{{$index}}</td>
						<td class="product_name"><a href="{{ route('product.index',['id'=>$product->id]) }}">{{$product->name}}</a></td>
						<td>
							<div class="input-group-sm">
							  <span class="input-group-btn-sm">
								<button class="btn btn-secondary subOne  " type="button" data-input="{{$product->id}}">-</button>
							  </span>
							  <input type="text" class="form-control-sm  small-input" id="input-{{$product->id}}"  aria-label="qte" value="{{$product->qty}} " readonly>
							  <span class="input-group-btn-sm">
								<button class="btn btn-secondary addOne " type="button"  data-input="{{$product->id}}">+</button>
							  </span>
							</div>
						</td>
						<td>{{ round($product->price, 2)}}€</td>
						<td id="total-{{$product->id}}"><span>{{ round($product->price * $product->qty, 2) }}</span> €</td>
						<td><a href="{{route('panier.delete',['id'=>$product->id])}}" class="btn btn-icon btn-danger "> <i class="fa fa-trash"></i></a></td>
					</tr>
					@php
						$index ++;
					@endphp
					@endforeach              			              	
					<tr>
						<!--<td colspan="2"><form method="POST" action="">
						
							<form class="form-inline">
								 {{csrf_field()}}
								<div class="form-group ">
									<label for="coupon" class="">Coupon de réduction</label>
									<input type="text" class="form-control" id="coupon" placeholder="Ex: REMISE20">
								</div>
								<button type="submit" class="btn btn-primary">Appliqer le coupon</button>
							</form>
						</td>-->
							  
					</tr>
					
					<tr class="">
						<td colspan="4" class="text-right "> Total HT</td>
						<td  colspan="2" id="totalht"><span>{{\Cart::subtotal() }}</span> €</td>
					</tr>
					<tr class="">
						<td colspan="4" class="text-right "> T.V.A </td>
						<td colspan="2" id="tax"><span>{{\Cart::tax() }}</span> €</td>
					</tr>
					<tr class="total ">
						<td colspan="4" class="text-right"> Total</td>
						<td  colspan="2" id="total"><span>{{\Cart::total() }}</span> €</td>
					</tr>
				</tbody>
		</table>
     
			<div class="row">
				<div class="col-md-6 text-left">
						<a href="{{ url('/categories/alcools') }}" class="btn btn-icon btn-primary  "><i class="fa fa-reply"></i><span>Retour au catalogue</span></a>
				</div>
				<div class="col-md-6 text-right">
							<a  href="{{ route('panier.valider') }}" class="btn btn-icon btn-black"><i class="fa fa-check"></i><span>Valider le Panier </span></a>
				</div>
			</div>
                
                
	@endif   
		
		
</div>		

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



