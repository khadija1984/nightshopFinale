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

@include('includes._footer')