<?php

namespace App\Http\Controllers;

use App\Corredore;
use Illuminate\Http\Request;
use Session;

class CorredoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $corredores = Corredore::paginate(10);
        return view('corredores.index', compact('corredores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('corredores.create');
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
            'empresa' => 'required|max: 255',
            'descripcion' => 'required|max: 255',
            'nit' => 'required',           
            'celular' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ]);

        //dd($request->all());

        Corredore::create(
        ['empresa'=> $request->empresa,
        'descripcion'=> $request->descripcion,
        'nit'=> $request->nit,
        'celular'=> $request->celular,
        'telefono'=> $request->telefono,
        'email'=> $request->email,
     
        ]);

        Session::flash('message','Corredor creado exisitosamente');
        return redirect()->route('corredores.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corredore  $corredore
     * @return \Illuminate\Http\Response
     */
    public function show(Corredore $corredore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corredore  $corredore
     * @return \Illuminate\Http\Response
     */
    public function edit(Corredore $corredore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corredore  $corredore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corredore $corredore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corredore  $corredore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corredore $corredore)
    {
        //
    }

    public function corredores(){
        return view('corredores');
    }
}
