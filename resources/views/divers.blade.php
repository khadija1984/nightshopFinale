@include('includes._menu')
<link rel="stylesheet" href="{{ asset('css/stylefiche.css') }}">
<div style="position: absolute; padding-left: 310px;">
    <div class="col-md-8">
        <h1 class="portfolio-title text-uppercase">Divers</h1>
        
    <div class="row">
 
      
		<form action="{{route('alcools.index',['product'=>Request::segment(2)])}}" method="GET">
                        <ul class="nav navbar-nav text-uppercase">
                            <li> 
                                <label>Trier par</label>
                                <select class="custom-select" name="ordre">
                                <option value="prix-desc" {{app('request')->input('ordre') =='prix-desc'?'selected':''}}>Prix décroissant</option>
                                <option value="prix-asc" {{app('request')->input('ordre') =='prix-asc'?'selected':''}} >Prix croissant</option>
                                <option value="promotion" {{app('request')->input('ordre') =='promotion'?'selected':''}}>Promotions</option>
                                </select>
                            </li>
                            <li> 
                                <label>Afficher</label>
                                <select class="custom-select" name="perpage">
                                <option value="6" {{app('request')->input('perpage') =='6'?'selected':''}}>6</option>
                                <option value="9" {{app('request')->input('perpage') =='9'?'selected':''}}>9</option>
                                <option value="12" {{app('request')->input('perpage') =='12'?'selected':''}}>12</option>
                                <option value="15" {{app('request')->input('perpage') =='15'?'selected':''}}>15</option>
                                <option value="18" {{app('request')->input('perpage') =='18'?'selected':''}}>18</option>
                                <option value="21" {{app('request')->input('perpage') =='21'?'selected':''}}>21</option>
                                </select>
                </li> 
            </ul>
          <br>
           <button type="submit"><i class="fa fa-search"></i></button>
		</form>       
   
        @foreach($product as $product)
            @if($product->category_id == 2)
        <div class="col-md-4" >
            <article class="post portfolio-2 portfolio-3 post-grid">
                <div class="post-thumb">
                    <a href=""><img src="{{ URL($product->image) }}" alt=""></a>
                    <a href="{{ route('product.index',['id'=>$product->id]) }}" class="post-thumb-overlay text-center">
                        <div class="text-uppercase text-center">Voir</div>
                     </a>
                </div>
               <div class="post-content">
                    <header class="entry-header text-center text-uppercase">
                    <!--<h6><a href="#">{{ $product->name }}</a></h6>-->
                    <h1 class="entry-title"><a href="">{{ $product->name }}</a></h1>
                    <h6>{{ $product->prix }}.00 €</h6>
					
                    <!----<button  type="submit" class="btn btn-icon btn-primary" ><i class="fa fa-cart-arrow-down"></i> <span>Ajouter au panier</span></button>--->
                    <!---<h6>categorie  {{ $product->category_id }}</h6>--->
					
					<a  href="{{route('panier.add',['name'=>$product->name])}}" style="width:5; margin-left:-27px;"  class="btn btn-icon btn-primary" ><i class="fa fa-cart-arrow-down"></i><span>Ajouter au panier</span></a>
                    
					</header>
					
                </div>
            
            </article>
        </div>
            @endif
        @endforeach
    </div>
</div>
</div>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

