<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title >Pro Viviendas</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- FontIcons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container" >
          <a style="color: green;" class="navbar-brand"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span><strong>Pro Viviendas</strong></a>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a style="color: green;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a  style="color: green;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
    </div>
  </body>
</head>
<body>
  <div id="sideNavigation" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>    
    <ul class="navbar-nav ml-left">
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('home')}}">Inicio</a>
      </li>
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('inmuebles.index')}}">Inmuebles</a>
      </li>     
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('clientes.index')}}"><strong>¡Clientes Pro vivienda!</strong></a>
      </li>
      <li>
        <a style="color: green;" class="nav-link" href="{{ route('pais.index')}}">Pais</a>
      </li>
      <li>
        <a style="color: green;" class="nav-link" href="{{ route('ciudades.index')}}">Ciudad</a>
      </li>      
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('pagos.index')}}">Pagos</a>
      </li>
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('demandas.index')}}">Demanda</a>
      </li>
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('caracteristicas.index')}}">Caracteristicas</a>
      </li>
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('reporte.index')}}">Reportes</a>
      </li>      
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('corredores.index')}}">Corredores</a>
      </li>
      <li class="nav-item">
        <a style="color: green;" class="nav-link" href="{{ route('users.index')}}">Usuarios</a>
      </li>
    </ul>
  </div>
  
  <div id="main" class="col-md-12 ml-sm-auto col-lg-9 ">
    <!-- Add all your websites page content here  -->
    
    <!-- ACA COLOCAR ADMIN.BLADE PARA MENU RESPONSIVE -->
      
  </div>
</html>
<script>
function openNav() {
document.getElementById("sideNavigation").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
document.getElementById("sideNavigation").style.width = "0";
document.getElementById("main").style.marginLeft = "0";
}
</script>
<style type="text/css" media="screen">
/* The side navigation menu */
.sidenav {
height: 100%; /* 100% Full-height */
width: 0; /* 0 width - change this with JavaScript */
position: fixed; /* Stay in place */
z-index: 1; /* Stay on top */
top: 50;
left: 0;
overflow-x: hidden; /* Disable horizontal scroll */
padding-top: 60px; /* Place content 60px from the top */
padding-left: 24px;
overflow-x: hidden;
transition: 0.5s;
padding-top: 40px;/* 0.5 second transition effect to slide in the sidenav */
}
/* The navigation menu links */
.sidenav a {
padding: 8px 8px 8px 32px;
text-decoration: none;
color: #818181;
display: block;
}
/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
color: #f1f1f1;
}
/* Position and style the close button (top right corner) */
.sidenav .closebtn {
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
margin-left: 50px;
}
/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
transition: margin-left .5s;
padding: 20px;
overflow:hidden;
width:100%;
}
body {
overflow-x: hidden;
}
/* Add a black background color to the top navigation */
.topnav {
background-color: #333;
overflow: hidden;
}
/* Style the links inside the navigation bar */
.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
/* Change the color of links on hover */
.topnav a:hover {
background-color: #ddd;
color: black;
}
/* Add a color to the active/current link */
.topnav a.active {
background-color: #4CAF50;
color: white;
}
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;}
}
a svg{
transition:all .5s ease;
&:hover{
#transform:rotate(180deg);
}
}
#ico{
display: none;
}
.menu{
background: #000;
display: none;
padding: 5px;
width: 320px;
a{
display: block;
color: #fff;
text-align: center;
padding: 10px 2px;
margin: 3px 0;
text-decoration: none;
&:nth-child(1){
margin-top: 0;
}
&:nth-child(5){
margin-bottom: 0;
}
&:hover{
background: #555;
}
}
}
</style>