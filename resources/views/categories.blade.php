@include('includes._menu')
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
@include('includes._footer')