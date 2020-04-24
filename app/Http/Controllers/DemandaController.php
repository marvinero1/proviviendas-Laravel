<?php

namespace App\Http\Controllers;

use App\Demanda;
use Illuminate\Http\Request;
use Session;

class DemandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $demandas = Demanda::paginate(10);
        return view('demandas.index', compact('demandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('demandas.create');
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
            'telefono' => 'required',
            'celular' => 'required',
            'whatsapp' => 'required',
            
        ]);

        dd($request->all());

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function show(Demanda $demanda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Demanda $demanda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demanda $demanda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demanda $demanda)
    {
        //
    }

    public function demandas(){
        return view('demandas');
    }
}
