<style>
body{
  font-family: "Lato", 'Helvetica Neue', Arial, Helvetica, sans-serif !important;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  font-weight: 400;
}
a {
    color: #337ab7;
    text-decoration: none;
}
.wrapper {
  min-height: 100%;
  position: relative;
  overflow: hidden;
  box-sizing: border-box;
  display: block;
}
.main-header {
  position: relative;
  max-height: 100px;
  z-index: 1030;
  display: block;
  box-sizing:border-box;
}
.main-header a{
  text-decoration: none;
}
.skin-blue .main-header .logo {
    background-color: #367fa9;
    color: #ffffff;
    border-bottom: 0 solid transparent;
}
.main-header .logo {
    transition: width .3s ease-in-out;
    display: block;
    float: left;
    height: 50px;
    font-size: 20px;
    line-height: 50px;
    text-align: center;
    width: 230px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    padding: 0 15px;
    font-weight: 300;
    overflow: hidden;
}
.skin-blue .main-header .navbar {
    background-color: #3c8dbc;
}
.main-header>.navbar {
    transition: margin-left .3s ease-in-out;
    margin-bottom: 0;
    margin-left: 230px;
    border: none;
    min-height: 50px;
    border-radius: 0;
}
.skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background-color: #222d32;
}
.main-sidebar, .left-side {
    position: absolute;
    top: 0;
    left: 0;
    padding-top: 50px;
    min-height: 100%;
    width: 230px;
    z-index: 810;
}
.sidebar {
    padding-bottom: 10px;
}
.sidebar-menu, .main-sidebar .user-panel, .sidebar-menu>li.header {
    white-space: nowrap;
    overflow: hidden;
}
.sidebar-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}
.skin-blue .sidebar-menu > li.header {
    color: #4b646f;
    background: #1a2226;
}
.sidebar-form, .sidebar-menu>li.header {
    overflow: hidden;
    text-overflow: clip;
}
.sidebar-menu, .main-sidebar .user-panel, .sidebar-menu>li.header {
    white-space: nowrap;
}
.sidebar-menu>li {
    position: relative;
    margin: 0;
    padding:0;
}
.sidebar-menu li.header {
    padding: 10px 25px 10px 15px;
    font-size: 12px;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
  box-sizing: border-box;
}
.content-wrapper, .right-side {
    min-height: 100%;
    background-color: #ecf0f5;
    z-index: 800;
    transition: transform .3s ease-in-out,margin .3s ease-in-out;
    margin-left: 230px;
}
.skin-blue .sidebar-menu > li:hover > a, .skin-blue .sidebar-menu > li.active > a {
    color: #ffffff;
    background: #1e282c;
    border-left-color: #3c8dbc;
    text-decoration: none;
}
.skin-blue .sidebar-menu > li > a {
    border-left: 3px solid transparent;
}
.sidebar-menu li>a {
    position: relative;
}
.sidebar-menu>li>a {
    padding: 12px 5px 12px 15px;
    display: block;
}
.skin-blue .sidebar a {
    color: #b8c7ce;
}
.sidebar-menu>li>a>.fa, .sidebar-menu>li>a>.glyphicon, .sidebar-menu>li>a>.ion {
    width: 20px;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transform: translate(0, 0);
}
.server-tag{
  margin-left:22px;
  font-size:13px;
  font-weight:200;
  opacity:.55;
}
.skin-blue .content-header {
    background: transparent;
}
.content-header {
    position: relative;
    padding: 15px 15px 0 15px;
}
.content {
    min-height: 250px;
    padding: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
.box.box-primary {
    border-top-color: #3c8dbc;
    padding-top: 15px;
}
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.lib-name{
  width:20%;
}
.lib-tag{
  
}
.lib-add{
  width:15%;
}
</style>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<body class="skin-blue">
    <div class="wrapper">
        <header class="main-header">
            <a href="{{ url('/') }}" class="logo">NightShop.be</a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <span class="sr-only"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    
                    <li role="presentation"><a href="{{ route('dashbordNightshop') }}"><i class="fa fa-tachometer"></i>Dashboard</a></li>
 
                    <li role="presentation"><a href="{{ route('dashbordAdmin') }}"><i class="fa fa-tachometer"></i>Dashboard</a></li>
                   
                    <li class="header">ACTION</li>
                    <li role="presentation" class="active"><a href="{{ url('/admin/categories') }}"><i class="fa fa-server"></i>Catégories</a></li>
                    <li role="presentation"><a href="{{ url('/admin/produits') }}">
                        <i class="fa fa-server"></i>
                        <span class="server-id">Produits</span><br>
                        <span class="server-tag"></span></a></li>
                        @if(Auth::user()->role == 'admin')
                        <li role="presentation" class="active"><a href="{{ url('/admin/users') }}"><i class="fa fa-server"></i>Users</a></li>
                        @endif
                        <li class="header">ACCOUNT</li>
                    <li role="presentation"><a href=""><i class="fa fa-sign-out"></i>Log out</a></li>
                </ul>
             </section>
        </aside>
        <div class="content-wrapper" style="min-height: 279px;">
            <section class="content-header">
		<div class="row">
                    <div class="col-md-8">
			<h3 style="margin-top: 5px"><i class="fa fa-folder"></i>Produits
			</h3>
                    </div>
                    <div class="col-md-4">
			<div class="pull-right">
                            <a href="{{ url('admin/Product/addProduct') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Ajouter Produit</a>
			</div>
                    </div>
  
		</div>
            </section>
            <section class="content">
                <div class="row">
                     <div class="col-md-12">
                         <div class="box box-primary" style="padding-top:15px">
                               <div class="box-body">
                                   <div ng-controller="SummaryTableController" class="ng-scope">
                                         <div cg-busy="loadingPromise" style="position: relative;">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="lib-name">Name</th>
                                                            <th class="lib-tag">slug</th>
                                                            <th class="lib-add">description</th>
                                                            <th class="lib-add">prix</th>
                                                            <th class="lib-add">quantité</th>
                                                            <th class="lib-add">image</th>
                                                            <th class="lib-add">categories</th>
                                                        </tr>
                                                    </thead>
                                                              <tbody>
                                                        @foreach($product as $product)
                                                        <tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                                            <td ng-repeat="col in columns" class="ng-scope">
                                                                <div ng-switch="" on="col.renderType">
                                                                    <div ng-switch-when="primaryLink" class="ng-scope">
                                                                       <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=1&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=1&amp;page=sqlite2">{{$product->name}}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                                <td ng-repeat="col in columns" class="ng-scope">
                                                                    <div ng-switch="" on="col.renderType">
                                                                        <div ng-switch-when="string" class="ng-binding ng-scope">
                                                                             {{$product->slug}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td ng-repeat="col in columns" class="ng-scope">
                                                                    <div ng-switch="" on="col.renderType">
                                                                        <div ng-switch-when="string" class="ng-binding ng-scope">
                                                                         {{$product->description}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td ng-repeat="col in columns" class="ng-scope">
                                                                    <div ng-switch="" on="col.renderType">
                                                                        <div ng-switch-when="string" class="ng-binding ng-scope">
                                                                         {{$product->prix}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                 <td ng-repeat="col in columns" class="ng-scope">
                                                                    <div ng-switch="" on="col.renderType">
                                                                        <div ng-switch-when="string" class="ng-binding ng-scope">
                                                                         {{$product->qte}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                 <td ng-repeat="col in columns" class="ng-scope">
                                                                    <div ng-switch="" on="col.renderType">
                                                                        <div ng-switch-when="string" class="ng-binding ng-scope">
                                                                         {{$product->image}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td ng-repeat="col in columns" class="ng-scope">
                                                                    <div ng-switch="" on="col.renderType">
                                                                        <div ng-switch-when="string" class="ng-binding ng-scope">
                                                                         {{$product->category_id}}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <form action="{{ action('AdminController@destroyProduct', ['id'=>$product->id]) }} " method="POST">
                                                                        {{csrf_field()}}
                                                                        {{method_field('DELETE')}}
                                                                        <input type="hidden" name="_method" value="DELETE" />
                                                                        <buttom type='submit' class="btn btn-success delete-user" style="border:none;"><i class="fa fa-trash-o" aria-hidden="true"></i></buttom>
                                                                    </form>
                                                                </td>
                                                            </tr>

                                                            @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
    
                                </div>
                         </div>
                     </div>
                 </div>
            </section>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script>
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>























