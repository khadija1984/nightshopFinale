@include('includes._menu')

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylefiche.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
<div class="container single-product ">
    <div class="row ">
            <div class="col-md-4 ">
                <div class="image">
                    <img src="{{URL($product->image)}}" alt="{{ $product->name }}" id="visuel">
                    <!--<ul class="tumbnails">
                    	@foreach($product->visuels as $visuel)
                          <li><a href="#"><img src="{{URL($visuel->url)}}" class="thumb-visuel" ></a></li>
                        @endforeach
                      </ul>-->
                </div>
            </div>
            <div class="col-md-5 infos">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->description }}</p>
                <ul>    
                    <li>Taille : M </li>
                    <li>Poids : 2 kg</li>
                    <li>Catégorie: {{ $product->category->name }}</li>

                </ul>
                <div class="tags">
                    <ul>
                    	@foreach($product->tags as $tag)
                       <!-- <li><a href="{{route('catalogue.tag',['slug'=>$tag->slug])}}">{{$tag->name}}</a></li>-->
                         <li><a href="#">{{$tag->name}}</a></li>
			@endforeach
                    </ul>
                </div>
                 
            </div>
            <div class="col-md-3 prix">
                 @if($product->onDiscount())
	                <span class="price promo">{{$product->prixVente()}} € </span>  <em class="promo">{{$product->prix}} €</em>
	                @else
	                <span class="price ">{{$product->prixVente()}} € </span>
                @endif
                
                 <div>
                    <p>Stock :{{$product->qte>0?$product->qte.' pièces':'insuffisant'}}  </p>
                <form class="form-horizontal contact-form" role="form" method="post" action="{{route('panier.add.product')}}">
                      {{csrf_field() }}
                      <input  name="name" type="hidden" value="{{$product->name}}">
                        <div class="row mt-4">
                            <div class="col-md-6"><label for="qte">Quantité:</label></div>
                            <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button class="btn btn-secondary subOneProduct  " type="button" data-input="{{$product->id}}">-</button>
                                  </span>
                                  <input type="text" class="form-control" id="input-{{ $product->id }}"  aria-label="qte" value="1" readonly name="qte">
                                  <span class="input-group-btn">
                                    <button class="btn btn-secondary addOneProduct " type="button"  data-input="{{$product->id}}">+</button>
                                  </span>
                              </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-icon btn-primary" ><i class="fa fa-cart-arrow-down"></i><span>Ajouter au panier</span></button>
                           <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id=2><i class="fa fa-heart"></i></a>
                         </div> 
                        </div>
                    </form>
                 </div>
                 <div class="row mt-4">
                     <div class="line-top">
                     <ul class="social">
                        <li> <a href=""><i class="fa fa-google-plus"></i></a> </li>
                        <li> <a href=""><i class="fa fa-facebook"></i></a> </li>
                        <li> <a href=""><i class="fa fa-twitter"></i></a> </li>
                    </ul>
                    </div>
               </div>
            </div>
        </div>
    

    <div class="products">
          <div class="header_title"><h4>Voir aussi </h4></div>
           <div class="row">
             @foreach($related as $product) 
		<div class="col-md-3">
			<div class="product">
                            <!--  <span class="bulle">Infos</span> -->
                            @if($product->onDiscount())
                            <span class="bulle bulle-promo">Promo</span>
                            <!-- <span class="bulle bulle-primary">New</span> -->
                            @endif
                            <a href="{{ route('product.index',['id'=>$product->id]) }}"><img src="{{URL($product->image)}}" alt="{{$product->name}}"></a>

                            <h4>{{$product->name}}</h4>
                            <p> {{ str_limit($product->description,100) }}</p>
                            <div class="actions">
                                @if($product->onDiscount())
                                <span class="price promo">{{$product->prix}} € </span>  <em class="promo">{{$product->prixVente()}} €</em>
                                @else
                                <span class="price ">{{$product->prixVente()}} € </span>
                                @endif

                                <a href="{{route('panier.add',['name'=>$product->name])}}" class="btn btn-icon btn-primary" alt="Ajouter au panier"><i class="fa fa-cart-arrow-down"></i></a>

                                <a href="{{ route('product.index',['id'=>$product->id]) }}" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>

                            @if(Auth::check())
                                @php
                                    $likes = \Auth::user()->likes->pluck('id');
                                @endphp

                                 <a href="#" class="btn btn-icon btn-secondary  {{in_array($product->id,$likes->toArray())?'':'btn-neutre'}} like" alt="favoris" data-id={{ $product->id }}><i class="fa fa-heart"></i></a>

                            @else

                                <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id={{ $product->id }}><i class="fa fa-heart"></i></a>
                            @endif

                    </div>
                </div>
		</div>
             @endforeach            
    	</div>
        </div>
    
    
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
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