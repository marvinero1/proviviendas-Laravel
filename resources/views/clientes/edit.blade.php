@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="container">
      <a href="{{route('clientes.index')}}" type="button" class="btn btn-outline-dark mb-3" style="cursor: grab;">Atras</a>
      <div class="panel-group mb-3"><div class="panel-heading" style="padding-bottom: 2vh;">Edicion Usuarios Pro Viviendas
      </div>
      <div class="panel panel-success" style="background: gainsboro; padding: 1vh;border-radius: 9px;">
        <div class="form-group">

          <form method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf  <!-- token de proteccion -->
            @method('PUT')
            <label for="usr">Nombre:</label>
            <input type="text" class="form-control" id="usr" name="titulo">
            <br>
            <label for="usr">Apellido:</label>
            <input type="text" class="form-control" name="descripcion">
            <br>         
            <label for="usr">Celular:</label>
            <input type="text" class="form-control" name="direccion">
            <br>
            <label for="usr">Telefono:</label>
            <input type="text" class="form-control" name="lat">
            <br>
            <label for="usr">C.I:</label>
            <input type="text" class="form-control" name="lng">
           
            <label for="usr">Imagen Cliente:</label>
            <br>
            <input name="imagen" type="file" />
            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
@endsection