@extends('layouts.admin')
@section('cont')
<div class="container">
  <div class="panel panel-success" style="padding: 1vh;border-radius: 9px;">
    <div class="form-group">
      @if($errors->any())
        <div class="alert alert-danger">
          <p style="color:green;">Formulario no completado! <br>Porfavor rellene todos los campos</p>
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
      <form action="{{route('ciudades.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf  <!-- token de proteccion -->
        @if (session('status'))
        @csrf_filed()
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div class="row">
          <div class="col-6"><span style="color:green;">Registro Ciudad</span>
          <br>
          <div class="form-group">Ciudad
            <select  name="ciudad" id="ciudad" class="form-control">
              <option >Elija Ciudad</option>
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
          <label for="usr">Descripción:</label>
          <textarea rows="4" cols="50" type="text" class="form-control" name="descripcion"></textarea>
        </div>
        <div class="col-6">          
          <label>Imagen Ciudad:</label>
          <br>
          <input name="imagen" type="file" />
          <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
            <a href="{{route('ciudades.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
@endsection