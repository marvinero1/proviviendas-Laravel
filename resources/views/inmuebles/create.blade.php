@extends('layouts.admin')
@section('cont')
<div class="container">
  <div class="panel panel-success" style="padding: 1vh;border-radius: 9px;">
    <div class="form-group">
      <form action="{{route('inmuebles.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf  <!-- token de proteccion -->
        @if (session('status'))
        @csrf_filed()
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div class="row">
          <div class="col-6"><span style="color:green;">Registro Inmueble Pro Viviendas</span>
          <br>
          <label>Titulo:</label>
          <input type="text" class="form-control" name="titulo" data-msg="Por favor introduzca un titulo">
          <br>
          
          <div class="form-group">Oferta
            <select name="oferta" id="oferta" class="form-control">
              <option >Elija una Oferta</option>
              <option value="venta">Venta</option>
              <option value="alquiler">Alquiler</option>
              <option value="anticretico">Anticretico</option>
            </select>
          </div>
          <div class="form-group">Tipo de Inmueble
            <select  name="tipo_inmueble" id="tipo_inmueble" class="form-control">
              <option >Elija tipo de Inmueble</option>
              <option value="casa">Casa</option>
              <option value="departamento">Departamento</option>
              <option value="garzonier">Garzonier</option>
              <option value="lote">Lote</option>
            </select>
          </div>
          <div class="form-group">Estado
            <select  name="estado" id="estado" class="form-control">
              <option >Elija un Estado</option>
              <option value="disponible">Disponible</option>
              <option value="vendido">Vendida</option>
            </select>
          </div>
          <label>Dirección:</label>
          <input type="text" class="form-control" name="direccion">
          <label for="usr">Descripción:</label>
          <textarea rows="4" cols="50" type="text" class="form-control" name="descripcion">
          </textarea>
        </div>
        <div class="col-6">
          <br>
          <label>Latitude:</label>
          <input type="text" class="form-control" name="lat">
          <br>
          <label>Longitude:</label>
          <input type="text" class="form-control" name="lng">
          
          <label>Precio:</label>
          <input type="text" class="form-control" name="precio">
          
          <label>Celular:</label>
          <input type="text" class="form-control" name="celular">
          <br>
          <label>Teléfono:</label>
          <input type="text" class="form-control" name="telefono">
          
          <label>Whatsapp:</label>
          <input type="text" class="form-control" name="whatsapp">
          <br>
          <label>Imagen Inmueble:</label>
          <br>
          <input name="imagen" type="file" />
          <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
            <a href="{{route('inmuebles.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
          </div>
        </div>
      </div>
    </form>
    
  </div>
</div>
</div>
</div>
@endsection