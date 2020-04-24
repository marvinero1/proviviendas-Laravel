@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="card">
      <div class="container">
        <div class="card-header" style="text-align: left;"><a href="{{route('inmuebles.create')}}" type="button" class="btn btn-info mb-3" style=" cursor: grab; border-radius: 5px; border: 1px green solid;">Agregar Caracteristicas</a>
        <form method="GET"  accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
          <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="submit">
              <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form></div>
        <div class="card-body">
          <table class="table">
            <thead class="tabla">
              <tr>
                <th scope="col">IdInmueble</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Icono</th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
<style type="text/css" media="screen">
.tabla{
color: green;
/* background-color: #212529; */
border-color: green;
}
</style>