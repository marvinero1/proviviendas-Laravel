<?php

namespace App\Http\Controllers;

use App\Reporte;
use Illuminate\Http\Request;
use Session;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $reportes = Reporte::paginate(10);
        return view('reportes.index', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('reportes.create');
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
            'tabla_id' => 'required',
            'type_id' => 'required',           
            'reporte' => 'required',
            'descripcion' => 'required|max: 255',         
        ]);

        Reporte::create(
        ['tabla_id'=> $request->tabla_id,
        'type_id'=> $request->type_id,
        'reporte'=> $request->reporte,
        'descripcion'=> $request->descripcion, 
        ]);

        Session::flash('message','Reporte creado exisitosamente');
        return redirect()->route('reporte.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        //
    }

    public function reportes(){
        return view('reportes');
    }

}
