@include('includes._menu')

    <div class="container">
        <div class="row">
            <div class="col-md-12 contenu">
                <div class="  products">
                    <div class="row  nomargin" id="signin">
                        <div class="col-lg-2 contact-infos">
                        </div> 
                        <div class="col-md-8">
                           <div class="header_title"><h4>Inscription </h4></div>

                           <form  class="pub form-custom form-horizontal" method="POST" action="{{ route('register') }}">
                                {{csrf_field()}}
                              <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} row"> 
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                         <div class="input-group-addon"><i class="fa fa-user" ></i></div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{ old('username') }}" required autofocus>
                                    </div> 
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row"> 
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                         <div class="input-group-addon"><i class="fa fa-envelope" ></i></div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="{{ old('email') }}" required >
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
                                         <div class="input-group-addon"><i class="fa fa-lock" ></i></div>
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
                                         <div class="input-group-addon"><i class="fa fa-lock" ></i></div>
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
                                    <a href="login.html" class="btn btn-black">J'ai déja un compte</a>
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