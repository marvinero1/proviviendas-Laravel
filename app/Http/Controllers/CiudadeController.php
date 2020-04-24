<?php

namespace App\Http\Controllers;

use App\Ciudade;
use Illuminate\Http\Request;
use Session;

class CiudadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $ciudades = Ciudade::paginate(10);
        return view('ciudades.index', compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudades.create');
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
            'ciudad' => 'required|in:lapaz,cochabamba,santacruz,oruro,potosi,chuquisaca,tarija,pando,beni',
            'descripcion' => 'required|max: 255'

        ]);

        //dd($request->all());
        

        Session::flash('message','Ciudad creado exisitosamente');
        return redirect()->route('ciudades.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudade  $ciudade
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudade $ciudade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudade  $ciudade
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudade $ciudade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudade  $ciudade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudade $ciudade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudade  $ciudade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudade $ciudade)
    {
        //
    }
    
    public function ciudades(){
        return view('ciudades');
    }
}
