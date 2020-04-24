@extends('layouts.admin')
@section('cont')
    <div class="card">
      <div class="container">
        <br>
        <h2 style="color:green;text-align: center;">Usuarios</h2>
        <div class="card-header" style="text-align: left;"><a href="{{route('users.create')}}" type="button" class="btn btn-info mb-3" style=" cursor: grab;border-radius: 5px; border: 1px green solid;">Agregar Usuario</a>
        <form method="GET"  accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
          <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="submit">
              <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        @if (Session::has('message'))
        <div class="alert alert-info" style="color: green;background-color: darkseagreen;">{{ Session::get('message') }}</div>
        @endif
      </div>
      <div class="table-responsive-xl">
        <table class="table table-striped">
          <thead class="tabla">
            <tr>
               <th scope="col">IdUsuario</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Nombre Usuario</th>
          <th scope="col">Ciudad</th>
          <th scope="col"> Acciones</th>

            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
        <tr>
            <tr>
              <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td> 
          <td>{{$user->nombre_usuario}}</td>
          <td>{{$user->ciudad}}</td>
          
              <td>
                <!--VIEWS-->
                <a title="View Image" href="{{ route('users.show',$user->id ) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Ver</button></a>
                <!--EDITAR-->
                <a title="Edit Image" href="{{ route('users.edit',$user->id ) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                <!--DELETE-->
                <form method="POST" accept-charset="UTF-8" style="display:inline">
                  <button href="{{ route('users.destroy',$user->id ) }}" type="submit" class="btn btn-danger btn-sm" title="Delete Image" onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$users->links()}}
        
      </div>
    </div>
  </div>
@endsection
<style type="text/css" media="screen">
.tabla{
color: green;
border-color: green;
}
</style>