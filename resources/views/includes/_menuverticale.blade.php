<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/images/">
    <title>{{config('app.name'),'NightShop'}} - @yield('title', 'Acueil du site')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('css/styleMenuVerticale.css') }}">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<script src="https://www.w3schools.com/lib/w3.js"></script>

<body>
<div id="divnavigation">
    <ul id="navigation">
      <li><a href="{{ url('categories/alcools') }}">Alcools</a></li>
      <li><a href="{{ url('categories/softs') }}">Softs</a></li>
      <li><a href="{{ url('categories/packs') }}">Packs</a></li>
      <li><a href="{{ url('categories/divers') }}">Divers</a></li>
    </ul><br>
    <center><div><h4>Nouveau Produit</h4></div></center>
    <div class="row" >
        @foreach ($lasts->slice(0,2) as $last)
            <div style="position:absolute; padding-left: 20px;">
                <center>
                    <a href="{{ route('product.index',['id'=>$last->id]) }}" alt="{{$last->name}}">
                    <img id="img" class="nature" style="height: 200px; width: 200px;"src=" ../{{$last->image}} " alt="" >
                    </a>
                </center>
            </div>
        @endforeach
    </div>
    
</div>
</body>
</html>
