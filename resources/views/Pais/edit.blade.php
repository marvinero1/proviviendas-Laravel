@extends('layouts.admin')
@section('cont')
<div class="container">
  <div class="panel panel-success" style="padding: 1vh;border-radius: 9px;">
    <div class="form-group">
      <form action="{{route('pais.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf  <!-- token de proteccion -->
        @if (session('status'))
        @csrf_filed()
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div class="row">
          <div class="col-6"><span style="color:green;">Registro Pais</span>
          <br>
          <div class="form-group">Pais
            <select  name="pais" id="pais" class="form-control">
              <option >Elija Pais</option>
              <option value="bolivia">Bolivia</option>
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