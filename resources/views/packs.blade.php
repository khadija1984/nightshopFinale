@include('includes._menu')

@include('includes._menuverticaledroite')
<script src="https://www.w3schools.com/lib/w3.js"></script>
<style>
    #divnavigation{
       padding-left: 30px;
       padding-top: 5px;
       position: absolute;
       
    }  
    #navigation {
    width: 200px;
    list-style: none;
    text-align: center;
    
    }
    #navigation ul{
        
        
    }
    #navigation li {
        background-color:#729EBF; 
        background-image:-webkit-linear-gradient(top, #729EBF 0%, #333A40 100%);
        background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%);
        border-radius: 6px;
        margin-bottom:2px;
        box-shadow: 3px 3px 3px #999;
        border:solid 1px #333A40
    }
    #navigation a {
        display:block;
        text-decoration: none;
        color: #fff;
        padding: 8px 0;
        font-family: verdana;
        font-size:1.2em
    }
    #navigation ul li a, #navigation li:hover li a {
        font-size:1em
    }
    #navigation li:hover {
        background: #729EBF
    }
    #menu-accordeon ul li:last-child {
        border-radius: 0 0 6px 6px;
        border:none;
    }
    #menu-accordeon li:hover li {
        max-height: 15em;
    }
  #img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
</style>
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
        @foreach($products as $product)
            @if($product->category_id == 3)
        <div class="col-md-6" >
            <article class="post portfolio-2 portfolio-3 post-grid">
                <div class="post-thumb">
                    <a href=""><img style="height:150px;"  src=" {{ URL($product->image) }}" alt=""></a>
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
        {{ $products->links() }}
    </div>
</div>
</div>
<div id="divnavigation">
    <ul id="navigation">
      <li><a href="{{ url('categories/alcools') }}">Alcools</a></li>
      <li><a href="{{ url('categories/softs') }}">Softs</a></li>
      <li><a href="{{ url('categories/packs') }}">Packs</a></li>
      <li><a href="{{ url('categories/divers') }}">Divers</a></li>
    </ul><br>
    <center><div><h4>Nouveau Produit</h4></div></center>
    
    <div class="row" >
        @foreach ($lasts as $last)
            <div style="position:absolute; padding-left: 20px;">
                <center>
                    <a href="{{ route('product.index',['id'=>$last->id]) }}" alt="{{$last->name}}">
                    <img id="img" class="nature" style="height: 200px; width: 200px;"src="../{{$last->image}}" alt="" >
                    </a>
                </center>
            </div>
        @endforeach
    </div>
    
</div>

<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@include('includes._footer')
