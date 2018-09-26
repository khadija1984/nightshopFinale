@include('includes._menu')
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="{{ asset('css/stylefiche.css') }}">
<div style="position: absolute; padding-left: 310px;">
    <div class="col-md-8">
        <h1 class="portfolio-title text-uppercase">Packs</h1>
            <div class="navbar navbar ">
                <form class="form-inline" action="{{route('filtrePacks',['categorie'=>Request::segment(2)])}}" method="GET">
                    <ul class="form-control" style="list-style-type: none;">
                            <li> 
                                <select  name="ordre">
                                <option value="all" {{app('request')->input('ordre') =='all'?'selected':''}}>All</option>
                                 <option value="prix-desc" {{app('request')->input('ordre') =='prix-desc'?'selected':''}}>Prix décroissant</option>
                                <option value="prix-asc" {{app('request')->input('ordre') =='prix-asc'?'selected':''}} >Prix croissant</option>
                                <option value="ASC"{{app('request')->input('ordre') =='ASC'?'selected':''}} >Noms : A-Z</option>
                                <option value="DESC" {{app('request')->input('ordre') =='DESC'?'selected':''}}>Noms : Z-A</option>
                                </select>
                            </li>
                        </ul>
                    <button   type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>   
<div class="row">        
        @foreach($products as $pro)
            @if($pro->category_id == 3)
        <div class="col-md-6" >
            <article class="post portfolio-2 portfolio-3 post-grid">
                <div class="post-thumb">
                    <a href=""><img style="height:150px;"  src=" {{ URL($pro->image) }}" alt=""></a>
                    <a href="{{ route('product.index',['id'=>$pro->id]) }}" class="post-thumb-overlay text-center">
                        <div class="text-uppercase text-center">Voir</div>
                     </a>
                </div>
               <div class="post-content">
                    <header class="entry-header text-center text-uppercase">
                    <h1 class="entry-title"><a href="">{{ $pro->name }}</a></h1>
                    <h6>{{ $pro->prix }}.00 €</h6>
					
					<a  href="{{route('panier.add',['name'=>$pro->name])}}" style="width:5; margin-left:-27px;"  class="btn btn-icon btn-primary" ><i class="fa fa-cart-arrow-down"></i><span>Ajouter au panier</span></a>
                    
					</header>
					
                </div>
            
            </article>
        </div>
            @endif
        @endforeach
        {{ $products->links() }}
    </div>
</div>
</div>
@include('includes._menuverticale')
@include('includes._menuverticaledroite')
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

@include('includes._footer')
