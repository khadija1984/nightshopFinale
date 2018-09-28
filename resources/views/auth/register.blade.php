@include('includes._menu')
<link rel="stylesheet" href="{{ asset('css/stylefiche.css') }}">
<div class="row">
    <div class="col-md-12 contenu">
        <div class="  products">
            <div class="row  nomargin" id="signin">
                <div class="col-lg-2 contact-infos">
                </div> 
                <div class="col-md-8">
                    <div class=><h4>Inscription </h4></div>
                    
                        <form  class="pub form-custom form-horizontal" method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} row"> 
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                                            <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{ old('username') }}" required autofocus>
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

                                            <input type="text" class="form-control" id="username" name="Adresse" placeholder="Adresse" value="{{ old('rue') }}" required autofocus>
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

                                            <input type="role" class="form-control" id="codePostale" name="role" placeholder="role"  value="{{ old('role') }}" required >
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

                                            <input type="email" class="form-control" id="codePostale" name="email" placeholder="email"  value="{{ old('email') }}" required >
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

                                            <input type="codePostale" class="form-control" id="codePostale" name="codePostale" placeholder="codePostale"  value="{{ old('codePostale') }}" required >
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
                                <textarea class="form-control" id="message" name="message" rows="8"></textarea>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <a href="{{ route('login') }}" class="btn btn-black">J'ai déja un compte</a>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary float-right">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
<footer class="footer-widget-section" style=" margin-top:100px;">
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