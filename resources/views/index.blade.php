@extends('layouts.main')

@section('title')

	{{ $product->name }}
@endsection

@section('content')
	<div class="container single-product ">
        <div class="row ">
            <div class="col-md-4 ">
                <div class="image">
                    <img src="{{URL($product->image)}}" alt="{{ $product->name }}" id="visuel">
                    <ul class="tumbnails">
                    	@foreach($product->visuels as $visuel)
                          <li><a href="#"><img src="{{URL($visuel->url)}}" class="thumb-visuel" ></a></li>
                        @endforeach
                      </ul>
                </div>
            </div>
            <div class="col-md-5 infos">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->description }}</p>
                <ul>    
                    <li>Taille : M </li>
                    <li>Poids : 2 kg</li>
                    <li>Cateégorie: {{ $product->category->name }}</li>

                </ul>
                <div class="tags">
                    <ul>
                    	@foreach($product->tags as $tag)
                        <li><a href="{{route('catalogue.tag',['slug'=>$tag->slug])}}">{{$tag->name}}</a></li>
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
                    <form  method="POST" action="{{route('panier.add.product')}}">
                     
                      {{csrf_field() }}

                      <input  name="slug" type="hidden" value="{{$product->slug}}">

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
					@include('includes._product')
				</div>
             @endforeach            
    	</div>
       </div>
   </div>

@endsection