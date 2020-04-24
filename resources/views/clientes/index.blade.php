@extends('layouts.admin')
@section('cont')
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="card">
      <div class="container">
        <br>
         <h2 style="color:green;text-align: center;">Clientes</h2>
        <div class="card-header" style="text-align: left;"><a href="{{route('clientes.create')}}" type="button" class="btn btn-info mb-3" style=" cursor: grab;border-radius: 5px; border: 1px green solid;">Agregar Cliente</a>
          @if (Session::has('message'))
      <div class="alert alert-info" style="color: green;background-color: darkseagreen;">{{ Session::get('message') }}</div>
          @endif
        <form method="GET"  accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
          <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="submit">
              <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form></div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="tabla">
              <tr>
                <th scope="col">IdCliente</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">C.I</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
             @foreach($clientes as $cliente)
              <tr>
                <td>{{$cliente->id}}</a></td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->ci}}</td>
                <td></td>
                <td>
              <!--VIEWS-->
                  <a title="View Image" href="{{ route('clientes.show',$cliente->id)}}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                   <!--EDITAR-->
                  <a title="Edit Image" href="{{ route('clientes.edit',$cliente->id)}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                 <!--DELETE-->
                  <form method="POST" accept-charset="UTF-8" style="display:inline"> 
                    <button href="{{ route('clientes.destroy',$cliente->id)}}" type="submit" class="btn btn-danger btn-sm" title="Delete Image" onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                  </form>
                 
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>
          {{$clientes->links()}}
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
<style type="text/css" media="screen">
.tabla{
color: green;
/* background-color: #212529; */
border-color: green;
}
</style>