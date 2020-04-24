<?php

namespace App\Http\Controllers;

use App\Pai;
use Illuminate\Http\Request;
use Session;

class PaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pais = Pai::paginate(5);
        return view('pais.index', compact('pais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pais.create');
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
            'pais' => 'required|in:bolivia',
            'descripcion' => 'required|max: 255'

        ]);

        //dd($request->all());

        Pai::create(
        ['pais'=> $request->pais,
        'descripcion'=> $request->descripcion,
        ]);

        Session::flash('message','Pais creado exisitosamente');
        return redirect()->route('pais.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function show(Pai $pai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pai $pai)
    {
        return view('pais.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pai $pai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pai $pai)
    {
        //
    }

    public function pais(){
       return view('pais');
    }
}
