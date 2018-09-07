<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/images/">

    <title>{{config('app.name'),'NightShop'}} - @yield('title', 'Acueil du site')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/images/logo.png" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="{{ url('/') }}" data-toggle="dropdown" class="dropdown-toggle">Home</a>
                       
                    </li>
                    <li class="menu-item-has-children"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Boutique
                        <i class="fa fa-angle-down"></i></a>
                       <ul class="sub-menu">
                            <li class="menu-item-has-children"><a href="{{ url('categories') }}">Catégories <i
                                    class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('categories/alcools') }}">Alcools</a>
                                        <!---
                                            <ul class="sub-menu">
                                            <li><a href="">Vodka</a></li>
                                            <li><a href="">Whisky</a></li>
                                            <li><a href="">Bières</a></li>
                                            <li><a href="">Vin Mousseux-Champagne</a></li>
                                            <li><a href="">Rhum</a></li>
                                            <li><a href="">Liqueur</a></li>
                                            </ul>
                                        --->
                                    </li> 
                                    <li><a href="home-1.html">Softs</a></li>
                                    <li><a href="home-2.html">Packs</a></li>
                                    <li><a href="home-2.html">Divers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a href="{{ url('apropos') }}">A PROPOS</a></li>
                    <li><a href="{{ url('contact') }}">CONTACTEZ-NOUS</a></li>
                </ul>
                
                <div class="i_con">
                   <!--- <a href="#"><i class="active fa fa-twitter"></i></a>--->
                   <!---<a href="#"><i class="fa fa-facebook"></i></a>--->
                   <!--- <a href="#"><i class="fa fa-linkedin"></i></a>--->
                   <!---  <a href="#"><i class="fa fa-google-plus"></i></a>--->
                   <!--- <a href="#"><i class="fa fa-instagram"></i></a>--->
                   <!--- <a href="#"><i class="fa fa-heart"></i></a>--->
                    @guest
                        <div>
                       <a href="{{ route('login') }}"><i class="active fa fa"></i>Connectez-vous</a>

                        <a href="{{ route('register') }}"><i class="active fa fa"></i>Inscrivez-vous</a>

                        </div>
                     @else
                         <div>
                             <p>Bienvenue</p>
                           <a href="#"><i class="active fa fa"></i></a>  
                        <a href="#"><i class="active fa fa"></i>Mon compte</a>
                        <a href="logout" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><i class="active fa fa"></i></a>
                      
                        </div>
                     @endguest
                    <div class="top-search">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>

            </div>
            <!-- /.navbar-collapse -->


            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- js files -->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.stickit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
