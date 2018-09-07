@include('includes._menu')
<html>
<body>
<div class="col-md-8">
    <h1 class="portfolio-title text-uppercase">Softs</h1>
    <div class="row">
        @foreach($product as $product)
            @if($product->category_id == 4)
            <div class="col-md-4" >
                <article class="post portfolio-2 portfolio-3 post-grid">
                    <div class="post-thumb ">
                        <a href=""><img src="{{ URL($product->image) }}" alt=""></a>
                        <a href="single-portfolio.html" class="post-thumb-overlay text-center ">
                            <div class="text-uppercase text-center" onclick="" >Voir</div>
                        </a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                        <h6><a href="#">{{ $product->name }}</a></h6>
                        <h1 class="entry-title"><a href="blog.html">{{ $product->name }}</a></h1>
                        <h6>{{ $product->prix }} €</h6>
                    <button >Ajouter au panier</button>
                        </header>
                    </div>

                </article>
            </div>
            @endif
        @endforeach
    </div> 
</div>
</body>
</html>

