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
            <a href="http://crudkit.com/demo/" class="logo">NightShop.be</a>
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
                    <li role="presentation"><a href=""><i class="fa fa-tachometer"></i>Dashboard</a></li>
                    <li class="header">ACTION</li>
                    <li role="presentation" class="active"><a href="{{ url('/admin/categories') }}"><i class="fa fa-server"></i>Catégories</a></li>
                    <li role="presentation"><a href="{{ url('/admin/produits') }}">
                        <i class="fa fa-server"></i>
                        <span class="server-id">Produits</span><br>
                        <span class="server-tag"></span></a></li>
                    <li role="presentation" class="active"><a href="{{ url('/admin/users') }}"><i class="fa fa-server"></i>Users</a></li>
                    <li class="header">ACCOUNT</li>
                    <li role="presentation"><a href=""><i class="fa fa-sign-out"></i>Log out</a></li>
                </ul>
             </section>
        </aside>
        <div class="content-wrapper" style="min-height: 279px;">
            <section class="content-header">
		<div class="row">
                    <div class="col-md-8">
			<h3 style="margin-top: 5px"><i class="fa fa-folder"></i> Ajouter Produit
			</h3>
                    </div>
                    <div class="col-md-4">
			
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
                                                <!----formulaire d'ajout d'un utilisateur--->
                                            <form action="{{ action('AdminController@createProduct')}}"  method="PUT">
                                                {{csrf_field()}}
                                                 {{method_field('ADD')}}
                                                <label>name:
                                                <input type="text" name="name"  />
                                                </label>
                                                <label>slug:
                                                <input type="text" name="slug"  />
                                                </label>
                                                 <label>prix:
                                                <input type="text" name="prix"  />
                                                </label>
                                                  <label>description:
                                                <input type="text" name="description"  />
                                                </label>
                                                  <label>quantité:
                                                <input type="text" name="quantité"  />
                                                </label>
                                                 
                                                 <label>image:
                                                <input type="text" name="image"  />
                                                </label>
                                                   <label>category_id:
                                                <input type="text" name="category_id"  />
                                                </label>
                                                
                                                <br>
                                                 <button type="submit" name="submit" class="btn send-btn">send massage</button>
                                             </form>  
             
                                        </div>
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
























