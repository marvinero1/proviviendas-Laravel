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
      <form action="{{route('users.store')}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf  <!-- token de proteccion -->
        @if (session('status'))
        @csrf_filed()
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div class="row">
          <div class="col-6"><span style="color:green;">Registro Usuario</span>         
          <div class="form-group">
            <label>{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <label>Apellidos:</label>
          <input type="text" class="form-control" name="apellido">
          <br>
          <div class="form-group">
            <label for="email" >{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password" >{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
          
        </div>
        <div class="col-6">
          <br>
          <div class="form-group">Ciudad
            <select  name="ciudad" id="ciudad" class="form-control">
              <option >Elija Ciudad</option>
              <option value="la_paz">La Paz</option>
              <option value="cbba">Cochabamba</option>
              <option value="stcz">Santa Cruz</option>
              <option value="oruro">Oruro</option>
              <option value="potosi">Potosi</option>
              <option value="sucre">Sucre</option>
              <option value="tarija">Tarija</option>
              <option value="pando">Pando</option>
              <option value="beni">Beni</option>
            </select>
          </div>
          <br>
          <label>Nombre Usuario:</label>
          <input type="text" class="form-control" name="nombre_usuario">
          <br>
          <label>Celular:</label>
          <input type="text" class="form-control" name="celular">
          <br>
          <label>Telefono:</label>
          <input type="text" class="form-control" name="telefono">
          <br>
          <label>Imagen Usuario:</label>
          <br>
          <input name="imagen_perfil" type="file" />
          <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary" onclick="return confirm('¿Desea guardar el registro?')">Guardar</button>
            <a href="{{route('users.index')}}" type="button" class="btn btn-outline-dark" style="cursor: grab;">Atras</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
@endsection