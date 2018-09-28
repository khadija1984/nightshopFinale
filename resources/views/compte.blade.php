@include('includes._menu')
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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



<div  class="row-fluid">
    <div class="col-md-12 ">
        <div style="background-color: white; margin-left: 200px;"class="col-lg-6 contact-infos">
                            
            
<button  onclick="masquer_div('a_masquer');" value="">historique</button>
<div id="a_masquer" style="visibility:hidden">
 @foreach($arrays as $post)
     <h6>Produit:{{ $post->name}}|Quantité:{{ $post->qty}}|Prix:{{ $post->price}}€|TVA:{{ $post->tax}}€|Prix Total:{{ $post->subtotal}}€</h6>
@endforeach
</div>  
<button  onclick="masquer_div('a_masquer1');" value="">Favoris</button>
<div id="a_masquer1" style="visibility:hidden">
   Contenu de la div en question.
</div>
        </div> 
        
        <div class="  products">
            
            <div class="row  nomargin" >
                
                <div style="width:50%; margin-left: 200px"class="col-md-8">
                    <div class=><h4>Modifier vos données personnelles </h4></div>
                    
                        <form action="{{ action('CompteController@update') }}"  method="PUT"  sytle=" position: relative; width:30px"class="pub form-custom form-horizontal" method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}
                        {{method_field('UPDATE')}}
                           <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} row"> 
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                            <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{Auth::user()->username}}" required autofocus>
                                        </div> 
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                        
                         
 <div class="form-group{{ $errors->has('rue') ? ' has-error' : '' }} row"> 
                                <label for="username" class="col-sm-2 col-form-label">Adresse</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                            <input type="text" class="form-control" id="username" name="Adresse" placeholder="Adresse" value="{{Auth::user()->rue}}" required autofocus>
                                        </div> 
                                        @if ($errors->has('rue'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('rue') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }} row"> 
                                <label for="codePostale" class="col-sm-2 col-form-label">Vous êtes Propriétaire d'un nightshop</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                            <input type="role" class="form-control" id="codePostale" name="role" placeholder="role"  value="{{Auth::user()->role}}" required >
                                    </div>
                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row"> 
                                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                            <input type="email" class="form-control" id="codePostale" name="email" placeholder="email"  value="{{Auth::user()->email}}" required >
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                        
                            <div class="form-group{{ $errors->has('codePostale') ? ' has-error' : '' }} row"> 
                                <label for="codePostale" class="col-sm-2 col-form-label">Code Postale</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                            <input type="codePostale" class="form-control" id="codePostale" name="codePostale" placeholder="codePostale"  value="{{Auth::user()->codePostale}}" required >
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row"> 
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                        <input type="password" class="form-control" id="password" placeholder="password " name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} row"> 
                                <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmation Password</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                        <input type="password" class="form-control" id="password_confirmation" placeholder=" confirmation password " name="password_confirmation" required>
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message">En quelques Mots (Bio facultatif)</label>
                                <textarea class="form-control" id="message" value="{{Auth::user()->bio}}" name="message" rows="2" cols="20" name="usrtxt" wrap="hard"></textarea>
                            </div>
                            <div class="form-group row">
                                
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary float-right">Modifier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br>
@include('includes._footer')



<script>
function masquer_div(id)
{
  if (document.getElementById(id).style.visibility == 'hidden')
  {
       document.getElementById(id).style.visibility = 'visible';
       document.getElementById(id).style.height = '100px';
  }
  else
  {
       document.getElementById(id).style.visibility = 'hidden';
       document.getElementById(id).style.height = '0';
  }
}
</script>