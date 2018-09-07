@include('includes._menu')
<div style="position: absolute; padding-left: 310px;">
<div class="col-md-8">
    <h1 class="portfolio-title text-uppercase">Alcools</h1>
    <div class="row">
        @foreach($product as $product)
            @if($product->category_id == 1)
        <div class="col-md-4" >
            <article class="post portfolio-2 portfolio-3 post-grid">
                <div class="post-thumb">
                    <a href=""><img src="{{ URL($product->image) }}" alt=""></a>
                    <a href="" class="post-thumb-overlay text-center">
                    <div class="text-uppercase text-center">Voir</div>
                     </a>
                </div>
               <div class="post-content">
                    <header class="entry-header text-center text-uppercase">
                    <!--<h6><a href="#">{{ $product->name }}</a></h6>-->
                    <h1 class="entry-title"><a href="blog.html">{{ $product->name }}</a></h1>
                    <h6>{{ $product->prix }}.00 €</h6>
                    <button >Ajouter au panier</button>
                    <!---<h6>categorie  {{ $product->category_id }}</h6>--->
                    </header>
                </div>
            
            </article>
        </div>
            @endif
        @endforeach
    </div>
</div>
</div>
@include('includes._footer')
