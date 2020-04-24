@extends('layouts.admin')
@section('cont')
<body>
  <div class="container">
    <div class="panel-group mb-3">
      <div class="panel-heading" style="padding-bottom: 1vh;">
      </div>
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
          <form action="{{route('reporte.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @if (session('status'))
            @csrf_filed()
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
            <div class="row">
              <div class="col-6"><span style="color:green;">Registro Reportes Pro Viviendas</span>
              <br>
              <br>
              <label>Tabla_id:</label>
              <input type="text" class="form-control" name="tabla_id">
              <br>
              <label>Type_id:</label>
              <input type="text" class="form-control" name="type_id">
              <br>             
            </div>
            <div class="col-6">
              <br>
              <br>
              <label>Reporte:</label>
              <input type="text" class="form-control" name="reporte">             
              <br>
              <label for="usr">Descripción:</label>
              <textarea rows="4" cols="50" type="text" class="form-control" name="descripcion"></textarea>
            </div>
          </div>
          <br>
          <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
            <a href="{{route('reporte.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
@endsection