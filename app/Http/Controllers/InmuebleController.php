<?php

namespace App\Http\Controllers;

use App\Http\Resources\InmuebleResource;
use App\Inmueble;
use Illuminate\Http\Request;
use Session;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $inmuebles = Inmueble::paginate(10);
        return view('inmuebles.index', compact('inmuebles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inmuebles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max: 255',
            'descripcion' => 'required|max: 255',
            'oferta' => 'required|in:venta,alquiler,anticretico',
            'tipo_inmueble' => 'required|in:casa,departamento,garzonier,lote',
            'estado' => 'required|in:disponible,vendido',
            'direccion' => 'required|max: 255',
            'lat' => 'required',
            'lng' => 'required',
            'precio' => 'required',
            'celular' => 'required',
            'telefono' => 'required',
            'whatsapp' => 'required'
        ]);

        //dd($request->all());
        Inmueble::create(
        ['titulo'=> $request->titulo,
        'descripcion'=> $request->descripcion,
        'oferta'=> $request->oferta,
        'tipo_inmueble'=> $request->tipo_inmueble,
        'estado'=> $request->estado,
        'direccion'=> $request->direccion,
        'lat'=> $request->lat,
        'lng'=> $request->lng,
        'precio'=> $request->precio,
        'celular'=> $request->celular,
        'telefono'=> $request->telefono,
        'whatsapp'=> $request->whatsapp,
        ]);

        Session::flash('message','Inmueble creado exisitosamente');
        return redirect()->route('inmuebles.index');  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show(Inmueble $inmueble):InmuebleResource
    {   
        
        return  new InmuebleResource($inmueble);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmueble $inmueble)
    {
        return view('inmuebles.edit', compact('inmueble'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmueble $inmueble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $inmueble = Inmueble::find($id);

        $inmueble->delete();

        Session::flash('message','Inmueble eliminado exitosamente');
        return redirect()->route('inmuebles.index');
    }

    public function inmuebles(){
       return view('inmuebles');
    }
}
