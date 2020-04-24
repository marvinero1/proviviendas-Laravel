<?php

namespace App\Http\Controllers;

use App\pagos;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pagos = Pagos::all();
        //$pagos = pagos::paginate(10);
        return view('pagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function show(pagos $pagos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function edit(pagos $pagos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pagos $pagos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pagos  $pagos
     * @return \Illuminate\Http\Response
     */
    public function destroy(pagos $pagos)
    {
        //
    }

    public function pagos(){
        return view('pagos');
    }
}
