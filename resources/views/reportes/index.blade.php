@extends('layouts.admin')
@section('cont')
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="card">
      <div class="container">
        <br>
         <h2 style="color:green;text-align: center;">Reportes</h2>
        <div class="card-header" style="text-align: left;"><a href="{{route('reporte.create')}}" type="button" class="btn btn-info mb-3" style=" cursor: grab;border-radius: 5px; border: 1px green solid;">Agregar Reporte</a>         
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
      </div> 
      @if (Session::has('message'))
      <div class="alert alert-info" style="color: green;background-color: darkseagreen;">{{ Session::get('message') }}</div>
          @endif
        <div class="card-body">
          <table class="table table-striped">
            <thead class="tabla">
              <tr>
                <th scope="col">Id Reporte</th>
                <th scope="col">Tabla_id</th>
                <th scope="col">Type_id</th>
                <th scope="col">Reporte</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
           @foreach($reportes as $reporte)
              <tr> 
                <td>{{$reporte->id}}</td>
                <td>{{$reporte->tabla_id}}</td>
                <td>{{$reporte->type_id}}</td>
                <td>{{$reporte->reporte}}</td>
                <td>{{$reporte->descripcion}}</td>
                <td>
              <!--VIEWS-->
                  <a title="View Image" ><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                   <!--EDITAR-->
                  <a title="Edit Image" ></a><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                 <!--DELETE-->
                  <form method="POST" accept-charset="UTF-8" style="display:inline"> 
                    <button  type="submit" class="btn btn-danger btn-sm" title="Delete Image" onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                  </form>
                 
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          {{$reportes->links()}}
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