<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/inicio', function () {
  //  return view('layouts.menu');
//});


Route::get('/home/', 'HomeController@index')->name('home');
//USUARIOS CRUD
Route::get('/users/','UsersController@users')->name('users');
Route::get('/inmuebles/','InmuebleController@inmuebles')->name('inmuebles');
Route::get('/clientes/','ClienteController@clientes')->name('clientes');
Route::get('/demandas/','DemandaController@demandas')->name('demandas');
Route::get('/reportes/','ReporteController@demandas')->name('reportes');

//Nav-Bar
Route::resource('inmuebles','InmuebleController');
Route::resource('clientes','ClienteController');
Route::resource('pais','PaiController');
Route::resource('ciudades','CiudadeController');
Route::resource('pagos','PagosController');
Route::resource('demandas','DemandaController');
Route::resource('caracteristicas','CaracteristicaController');
Route::resource('reporte','ReporteController');
Route::resource('corredores','CorredoreController');
Route::resource('users','UsersController');



// GOOGLE MAPAS USO
//Route::get('/ciudades','CiudadesController@mapa');
//Route::get('/', function() { 
//	$config=array(); 
//	$config['center']='New York, USA';
//	GMaps::initialize($config); 
//	$ciudades=GMaps::create_map();                    
//    echo $ciudades['js'];
//	echo $ciudades['html']; 
//}); 

//Route::get('googlemap', 'CiudadesController@mapa');
//Route::get('googlemap/direction', 'MapController@direction');