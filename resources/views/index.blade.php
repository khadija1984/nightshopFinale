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
               
            </div>
        </div>
        <div class="col-md-5 infos">
            <h4>{{ $product->name }}</h4>
            <p>{{ $product->description }}</p>
                <ul>    
                    <li>Taille : M </li>
                    <li>Poids : 2 kg</li>
                    <li>Cateégorie: {{ $product->category->name }}</li>
                    <li>Prix: {{ $product->prix }}€</li>
                </ul>
            <div class="tags">
                <ul>
                @foreach($product->tags as $tag)
                   <li><a href="#">{{$tag->name}}</a></li>
                    @endforeach
                </ul>
            </div>
                 
        </div>
        <div class="col-md-3 prix">
           
                
            <div>
                <p>Stock :{{$product->qte>0?$product->qte.' pièces':'insuffisant'}}  </p>
                <form class="form-horizontal contact-form" role="form" method="post" action="{{route('panier.add.product')}}">
                    {{ csrf_field() }}
                    
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

        <div class="row pub">
            <div class=" description">
              <h4>Déscription :</h4>
            <p>{{$product->description}}</p>
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
                        <a href="{{route('produit.index',['slug'=>$product->slug])}}"><img src="{{URL($product->image)}}" alt="{{$product->name}}"></a>

                        <h4>{{$product->name}}</h4>
                        <p> {{ str_limit($product->description,100) }}</p>
                        <div class="actions">
                            @if($product->onDiscount())
                            <span class="price promo">{{$product->prix}} € </span>  <em class="promo"></em>
                            @else
                            <span class="price "></span>
                            @endif
                            
                                   <button type="submit" class="btn btn-icon btn-primary" ><i class="fa fa-cart-arrow-down"></i><span>Ajouter au panier</span></button>
                            
                            <a href="{{route('produit.index',['slug'=>$product->slug])}}" class="btn btn-icon btn-secondary" alt="détails"><i class="fa fa-eye"></i></a>

                        @if(Auth::check())
                            


                           @else

                               <a href="#" class="btn btn-icon btn-secondary  btn-neutre like" alt="favoris" data-id={{ $product->id }}><i class="fa fa-heart"></i></a>
                           @endif

                                            </div>
                    </div>
                </div>
             @endforeach            
            </div>
        </div>
</div>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@include('includes._footer')