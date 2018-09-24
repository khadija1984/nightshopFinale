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
<div id="divnavigation" style="margin-left:1100px; ">
    
    
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
                    <a href="" alt="">
                    <img id="img" class="nature" style="height: 200px; width:500px;"src=" {{$v1->image}} " alt="" >
                    </a>
                </center>
            </div>
           @endforeach
            @endif
        @endforeach
    </div>
  
</div>
<!----<div id="divnavigation">
    <center><div><h4>Promo</h4></div></center>

    <div class="row" >
        
             <span class="bulle bulle-promo">Promo</span>
            
    </div>
</div>--->

