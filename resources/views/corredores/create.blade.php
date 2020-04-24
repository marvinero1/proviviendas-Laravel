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
          <form action="{{route('corredores.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @if (session('status'))
            @csrf_filed()
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
            <div class="row">
              <div class="col-6"><span style="color:green;">Registro Corredor Pro Viviendas</span>
              <br>
              <br>
              <label>Empresa:</label>
              <input type="text" class="form-control" name="empresa">
              <br>
              <label for="usr">Descripción:</label>
              <textarea rows="4" cols="50" type="text" class="form-control" name="descripcion">
              </textarea>
              <label>NIT:</label>
              <input type="text" class="form-control" name="nit">
            </div>
            <div class="col-6">
              <br>
              <br>
              <label>E-mail:</label>
              <input type="e-mail" class="form-control" name="email">
              <br><label>Celular:</label>
              <input type="text" class="form-control" name="celular">
              <br>
              <label for="usr">Telefono:</label>
              <input type="text" class="form-control" name="telefono">
              <br>
              <label>Imagen Corredor:</label>
              <br>
              <input name="imagen" type="file" />
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
                <a href="{{route('corredores.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
@endsection