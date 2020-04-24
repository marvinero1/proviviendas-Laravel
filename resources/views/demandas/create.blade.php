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
          <form action="{{route('demandas.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @if (session('status'))
            @csrf_filed()
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
            <div class="row">
              <div class="col-6"><span style="color:green;">Registro Demandas Pro Viviendas</span>
              <br>
              <br>
              <label>Titulo:</label>
              <input type="text" class="form-control" name="titlulo">
              <br>
              <label>Teléfono:</label>
              <input type="text" class="form-control" name="telefono"></input>
              <br>
              <div class="form-group">Estado:
              <select name="estado" id="estado" class="form-control">
              <option >Elija un estado</option>
              <option value="activado">Activado</option>
              <option value="desactivado">Desactivado</option>
            </select>
          </div>
            </div>
            <div class="col-6">
              <br>
              <br>
              <label>Whatsapp:</label>
              <input type="text" class="form-control" name="whatsapp"></input>
              <br>
              <label>Celular:</label>
              <input type="text" class="form-control" name="celular"></input>
              <br>
              <label>Descripción:</label>
              <textarea type="text" class="form-control" name="descripcion"></textarea>
              <br>
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
                <a href="{{route('demandas.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
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