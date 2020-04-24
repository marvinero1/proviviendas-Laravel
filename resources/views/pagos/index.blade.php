@extends('layouts.admin')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

@section('cont')
<div class="container">
<div class="row">
	<aside class="col-sm-6">
		<!-- Izquierda Formulario -->
		<a href="{{ route('home')}}" type="button" class="btn btn-outline-dark mb-3" style="cursor: grab;">Atras</a>
		<div class="card-body p-5">
			<form  method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf           
            <label for="usr">Nombre:</label>
            <input type="text" class="form-control" id="usr" name="nombre" data-msg="Por favor introduzca su nombre">
            <br>
            <label for="usr">Apellido:</label>
            <input type="text" class="form-control" name="apellido">
            <br>
            <div class="form-group">Ciudad
              <select  name="tipo" id="tipo" type="text"  class="form-control" name="ciudad" data-msg="Por favor seleccione el plan que desee" >
                <option >Elija una Ciudad</option>
               <option value="lapaz">La Paz</option>
              <option value="cochabamba">Cochabamba</option>
              <option value="santacruz">Santa Cruz</option>
              <option value="oruro">Oruro</option>
              <option value="potosi">Potosi</option>
              <option value="chuquisaca">Sucre</option>
              <option value="tarija">Tarija</option>
              <option value="pando">Pando</option>
              <option value="beni">Beni</option>
              </select>
            </div>
            <br>
            <label for="usr">Zip Code:</label>
            <input type="text" class="form-control" name="zipcode">         
          </form>
		</div>
	</aside> 
	<!-- col.// -->
<aside class="col-sm-6">
<!-- derecha FormulaRIO -->
<p style="color:green;">Pagos Pro Vivienda</p>
<article class="card">
<div class="card-body p-5">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
		<i class="fa fa-credit-card"></i> Tarjeta</a></li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
		<i class="fab fa-paypal"></i>  Paypal</a></li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
		<i class="fa fa-university"></i> Tranferencia Bancaria</a></li>
</ul>
<p class="alert alert-success">Ingreso Exitoso!</p>
<form role="form">
<div class="form-group">
	<label for="username">Nombre Completo</label>
	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-user"></i></span>
		</div>
		<input type="text" class="form-control" name="username" placeholder="" required="">
	</div> <!-- input-group.// -->
</div> <!-- form-group.// -->
<div class="form-group">
<label for="cardNumber">Numero de Tarjeta</label>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
	</div>
	<input type="text" class="form-control" name="cardNumber" placeholder="">
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->
<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label><span class="hidden-xs">Expiración</span> </label>
        	<div class="form-inline">
        		<select class="form-control" style="width:45%">
				  <option>MM</option>
				  <option>01 - Enero</option>
				  <option>02 - Febrero</option>
				  <option>03 - Marzo</option>
				  <option>04 - Abril</option>
				  <option>05 - Mayo</option>
				  <option>06 - Junio</option>
				  <option>07 - Julio</option>
				  <option>08 - Agosto</option>
				  <option>09 - Septiembre</option>
				  <option>10 - Octubre</option>
				  <option>11 - Noviembre</option>
				  <option>12 - Diciembre</option>
				</select>
	            <span style="width:10%; text-align: center"> / </span>
	            <select class="form-control" style="width:45%">
				  <option>YY</option>
				  <option>2018</option>
				  <option>2019</option>
				  <option>2020</option>
				  <option>2021</option>
				  <option>2022</option>
				  <option>2023</option>
				</select>
        	</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
            <input class="form-control" required="" type="text">
        </div> <!-- form-group.// -->
    </div>
</div> <!-- row.// -->
<button class="subscribe btn btn-primary btn-block" type="button"> Aceptar </button>
</form>
</div> <!-- card-body.// -->
</article>
	</aside> <!-- col.// -->
</div> <!-- row.// -->
</div> 
<!--container end.//-->

<article class="bg-secondary mb-3">  
	<div class="card-body text-center">
	    <h3 class="text-white mt-3">Pro Viviendas</h3>
		<p class="h5 text-white">Pagos Publicaciones  <br>Somos el aliado digital para soluciones de venta de Inmuebles.</p>  
	</div>
</article>
@endsection