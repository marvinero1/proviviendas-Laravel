@extends('layouts.admin')
@section('cont')
<!--Google map-->
<!--Section: Contact v.2-->
<section class="section">
  <div class="card">
    
<div class="card">
      <div class="container">
        <br>
        <h2 style="color:green;text-align: center;">Ciudad</h2>
        <div class="card-header" style="text-align: left;"><a href="{{route('ciudades.create')}}" type="button" class="btn btn-info mb-3" style=" cursor: grab;border-radius: 5px; border: 1px green solid;">Agregar Ciudad</a>
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
              <th scope="col">IdCiudad</th>
              <th scope="col">Ciudad</th>
              <th scope="col">Descripción</th>
              <th scope="col">Imagen</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>  
          @foreach($ciudades as $ciudad)         
            <tr>
              <td>{{$ciudad->id}}</td>
              <td>{{$ciudad->ciudad}}</td>
              <td>{{$ciudad->descripcion}}</td>
              <td>{{$ciudad->imagen}}</td>
              <td>
                <!--VIEWS-->
               
                <!--EDITAR-->
                <a title="Edit Image"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                <!--DELETE-->
                <form method="POST" accept-charset="UTF-8" style="display:inline">
                  <button  type="submit" class="btn btn-danger btn-sm" title="Delete Image" onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>        
        {{$ciudades->links()}}
      </div>
  </div>
</div>
<div class="card-body">
      <!--Google map-->
      <div id="map-container-google-9" class="z-depth-1-half map-container-7" >
        <iframe src="https://maps.google.com/maps?q=Miami&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
    </div>
</div>
</section>
@endsection
<!--Section: Contact v.2-->
<style type="text/css" media="screen">
.map-container-7{
overflow:hidden;
padding-bottom:37.25%;
position:relative;
height:0;
}
.map-container-7 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>