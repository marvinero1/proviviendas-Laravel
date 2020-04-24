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
          <form action="{{route('clientes.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @if (session('status'))
            @csrf_filed()
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
            <div class="row">
              <div class="col-6"><span style="color:green;">Registro Clientes Pro Viviendas</span>
              <br>
              <br>
              <label>Nombre:</label>
              <input type="text" class="form-control" id="usr" name="nombre" data-msg="Por favor introduzca su nombre">
              <br>
              <label>Apellido:</label>
              <input type="text" class="form-control" name="apellido">
              <br>
              <div class="col">Género: <br>
                <input type="radio" name="gender" value="m" checked> Masculino
                <input type="radio" name="gender" value="f"> Femenino
                <input type="radio" name="gender" value="o"> Otro
              </div>
            </div>
            <div class="col-6">
              <br>
              <br><label>Celular:</label>
              <input type="text" class="form-control" name="celular">
              <br>
              <label for="usr">Telefono:</label>
              <input type="text" class="form-control" name="telefono">
              <br>
              <label>C.I:</label>
              <input type="text" class="form-control" name="ci">
              <br>
              <label>Imagen Cliente:</label>
              <br>
              <input name="img_perfil" type="file" />
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
                <a href="{{route('clientes.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
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