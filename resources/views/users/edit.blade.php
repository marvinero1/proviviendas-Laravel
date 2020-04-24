@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="container">
      <a href="{{route('usuarios.index')}}" type="button" class="btn btn-outline-dark mb-3" style="cursor: grab;">Atras</a>
      <div class="panel-group mb-3"><div class="panel-heading">Registro Usuarios Pro Viviendas
      </div>
      <div class="panel panel-success" style="background: gainsboro; padding: 1vh;border-radius: 9px;">
        <div class="form-group">

          <form action="{{route('usuarios.update', $usuarios->id_usuario)}}" >
            @csrf
            @method('PUT')

            <label for="usr">Nombre:</label>
            <input type="text" class="form-control" id="usr" name="nombre" data-msg="Por favor seleccione el plan que desee" value="{{$usuarios->nombre}}">
            <br>
            <label for="usr">Apellido:</label>
            <input type="text" class="form-control" name="apellido" value="{{$usuarios->apellido}}">
            <br>
            <div class="form-group">Ciudad
              <select  name="tipo" id="tipo" type="text"  class="form-control" name="ciudad" data-msg="Por favor   seleccione el plan que desee">                
                <option >Elija una Ciudad</option>
                <option value="LP">La Paz</option>
                <option value="CBBA">Cochabamba</option>
                <option value="STCZ">Santa Cruz</option>  
              </select>
            </div>
            
            <label for="usr">Nombre de Usuario:</label>
            <input type="text" class="form-control" name="nombre_usuario" value="{{$usuarios->nombre-usuario}}">
            <br>
            <label for="usr">Celular:</label>
            <input type="text" class="form-control" name="celular" value="{{$usuarios->celular}}">
            <br>
            <label for="usr">Telefono:</label>
            <input type="text" class="form-control" name="telefono" value="{{$usuarios->telefono}}">
            <br>
            <label for="usr">Correo:</label>
            <input type="text" class="form-control" name="correo" value="{{$usuarios->correo}}">
            <br>
            <div class="form-group">Rol
              <select  name="tipo" id="tipo" type="text"  class="form-control" name="ciudad" data-msg="Por favor seleccione el plan que desee" >                
                <option>Elija Rol</option>
                <option value="root">Root</option>
                <option value="usuario">Usuario</option>
              </select>
              </div>
            <label for="usr">Imagen Perfil:</label>
            <br>
            <input name="imgperfil" type="file" />

            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
@endsection