@include('includes._menu')
<link rel="stylesheet" href="{{ asset('css/stylefiche.css') }}">
<div class="row">
    <div class="col-md-12 contenu">
        <div class="  products">
             <div class="row  nomargin" id="signin">
                <div class="col-lg-3 contact-infos">
                </div>    
                <div class="col-lg-6 offset-lg-3  " id="login">
                    <div class="title"><h4>Identification  </h4></div>
                    
                    <form class="pub form-custom form-horizontal" method="POST" action="{{ route('login') }}">
                         {{ csrf_field() }}
                         
                       <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} row"> 
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} row"> 
                            <label for="objet" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    
                                    <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="password" name="password">
                                </div>
                              @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('password.request') }}" class="text-right">Mot de passe oublié</a>
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <a href="{{ route('register') }}" class="btn btn-lg btn-block btn-black" >S'inscrire</a>
                            </div>
                            <div class="col-sm-6">
                              <button type="submit" class="btn btn-lg btn-block btn-primary ">Se connecter</button>
                            </div>
                        </div>
                    </form>
                    
                    <div class="row ">
                        <a href="{{ url('/') }}" class="bottom">nightshop.be</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes._footer')