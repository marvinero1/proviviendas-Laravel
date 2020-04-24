@extends('layouts.admin')
@section('cont')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
/* Make the image fully responsive */
.carousel-inner img {
width: 50%;
height: 50%;
}
</style>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 23rem;border: 2px solid green;border-radius: 5px;">
        <a href="{{route('inmuebles.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
        
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          
          
          <!-- The slideshow -->
          <img src="..." class="card-img-top">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h5 class="card-title">Titulo: {{$inmueble->titulo}}</h5>
              <p class="card-text"><li class="list-group-item">Tipo Inmueble: {{$inmueble->tipo_inmueble}}</li></p>
            </div>
          </div>
          <div class="card-body">
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span style="background-color: green;" class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span style="background-color: green;" class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <ul class="list-group list-group-flush" style="border: 2px solid green;border-radius: 5px;">
        <li class="list-group-item">Id: {{$inmueble->id}}</li>
        <li class="list-group-item">Descripcion: {{$inmueble->descripcion}}</li>
        <li class="list-group-item">Oferta: {{$inmueble->oferta}}</li>
        <li class="list-group-item">Estado: {{$inmueble->estado}}</li>
        <li class="list-group-item">Direccion: {{$inmueble->direccion}}</li>
        <li class="list-group-item">latitude: {{$inmueble->lat}}</li>
        <li class="list-group-item">longitude: {{$inmueble->lng}}</li>
        <li class="list-group-item">Precio: {{$inmueble->precio}}</li>
        <li class="list-group-item">Celular: {{$inmueble->celular}}</li>
        <li class="list-group-item">Telefono: {{$inmueble->telefono}}</li>
        <li class="list-group-item">Whatsapp: {{$inmueble->whatsapp}}</li>
      </ul>
    </div>
  </div>
  
</div>
@endsection
<!-- <div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div> -->