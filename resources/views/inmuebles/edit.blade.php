@extends('layouts.admin')
@section('cont')
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="container">
      <a href="{{route('usuarios.index')}}" type="button" class="btn btn-outline-dark mb-3" style="cursor: grab;">Atras</a>
      <div class="panel-group mb-3"><div class="panel-heading">Edicion Usuarios Pro Viviendas
      </div>
      <div class="panel panel-success" style="background: gainsboro; padding: 1vh;border-radius: 9px;">
        <div class="form-group">

          <form action="{{route('inmuebles.update')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf  <!-- token de proteccion -->
            @method('PUT')
            <label for="usr">Titulo:</label>
            <input type="text" class="form-control" id="usr" name="titulo">
            <br>
            <label for="usr">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion">
            <br>
            <div class="form-group">Oferta
              <select  name="tipo" id="tipo" type="text" class="form-control" name="oferta">
                <option >Elija una Oferta</option>
                <option value="venta">Venta</option>
                <option value="alquiler">Alquiler</option>
                <option value="anticretico">Anticretico</option>
              </select>
            </div>
             <div class="form-group">Tipo de Inmueble
              <select  name="tipo" id="tipo" type="text"  class="form-control" name="tipo_inmueble">
                <option >Elija tipo de Inmueble</option>
                <option value="casa">Casa</option>
                <option value="departamento">Departamento</option>
                <option value="garzonier">Garzonier</option>
                <option value="lote">Lote</option>
              </select>
            </div> 
            <div class="form-group">Estado
              <select  name="tipo" id="tipo" type="text"  class="form-control" name="estado">
                <option >Elija un Estado</option>
                <option value="disponible">Disponible</option>
                <option value="vendida">Vendida</option>
              </select>
            </div>           
            <label for="usr">Direccion:</label>
            <input type="text" class="form-control" name="direccion">
            <br>
            <label for="usr">Latitude:</label>
            <input type="text" class="form-control" name="lat">
            <br>
            <label for="usr">Longitude:</label>
            <input type="text" class="form-control" name="lng">
            <br>
            <label for="usr">Precio:</label>
            <input type="text" class="form-control" name="precio">
            <br>
            <label for="usr">Celular:</label>
            <input type="text" class="form-control" name="celular">
            <br>
            <label for="usr">Telefono:</label>
            <input type="text" class="form-control" name="telefono">
            <br>
            <label for="usr">Whatsapp:</label>
            <input type="text" class="form-control" name="whatsapp">
            <br>
            <label for="usr">Imagen Inmueble:</label>
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