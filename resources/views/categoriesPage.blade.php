@include('includes._menu')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/images/">
    <title>{{config('app.name'),'NightShop'}} - @yield('title', 'Acueil du site')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('css/styleMenuVerticale.css') }}">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<style>
    #divnavigation{
       
       padding-right:30px;
       padding-top: 50px;
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

<div style="position: absolute; padding-left: 310px;">
    <div class="col-md-8">
        <h1 class="portfolio-title text-uppercase">Categories</h1>
        <div class="row">
            @foreach($categorie as $categorie)
                <div class="col-md-4" >
                    <article class="post portfolio-2 portfolio-3 post-grid">
                        <div class="post-thumb ">
                            <a href=""><img src="{{ $categorie->image }}" alt=""></a>
                            @if ( $categorie->id ==1 )
                            <a href="{{ url('/categories/alcools') }}"  class="post-thumb-overlay text-center ">
                                <div class="text-uppercase text-center"  >Voir</div>
                            </a>
                            @elseif($categorie->id ==2)
                            <a href="{{ url('/categories/divers') }}"  class="post-thumb-overlay text-center ">
                                <div class="text-uppercase text-center"  >Voir</div>
                            </a>
                            @elseif($categorie->id ==3)
                            <a href="{{ url('/categories/packs') }}"  class="post-thumb-overlay text-center ">
                                 <div class="text-uppercase text-center"  >Voir</div>
                            </a>
                            @else
                            <a href="{{ url('/categories/softs') }}"  class="post-thumb-overlay text-center ">
                                <div class="text-uppercase text-center"  >Voir</div>
                            </a>
                            @endif        
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                            <h6><a href="#">{{ $categorie->name }}</a></h6>
                            <h1 class="entry-title"><a href="blog.html">{{ $categorie->name }}</a></h1>
                            <h6>{{ $categorie->id }}</h6>
                            </header>
                        </div>
                    </article>
                </div>
            @endforeach
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
        @foreach ($lasts->slice(0,2) as $last)
            <div style="position:absolute; padding-left: 20px;">
                <center>
                    <a href="{{ route('product.index',['id'=>$last->id]) }}" alt="{{$last->name}}">
                    <img id="img" class="nature" style="height: 200px; width: 200px;"src=" {{$last->image}} " alt="" >
                    </a>
                </center>
            </div>
        @endforeach
    </div>
    
</div>
<div id="divnavigation" style="margin-left:1000px; ">
    <div class="row" >
        @foreach($product as $product)
            @if($product->onDiscount())
            <div style="position:absolute;height: 200px; width:200px; ">
                <center>
                    <span class="bulle bulle-promo">Promo</span>
                    <a href="{{ route('product.index',['id'=>$product->id]) }}" alt="{{$product->name}}">
                    <img id="img" class="nature" style="height: 200px; width:500px;"src=" {{$product->image}} " alt="" >
                    </a>
                </center>
            </div>
            @else
            @foreach($las->slice(0,2) as $v1)
            <div style="position:absolute;height: 200px; width:200px;margin-top: 210px ">
                <center>
                    <span class="bulle bulle-promo">New</span>
                    <a href="{{ route('product.index',['id'=>$v1->id]) }}" alt="">
                    <img id="img" class="nature" style="height: 200px; width:500px;"src=" {{$v1->image}} " alt="" >
                    </a>
                </center>
            </div>
           @endforeach
            @endif
        @endforeach
    </div>
  
</div>
<footer class="footer-widget-section" style=" margin-top:650px;">
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