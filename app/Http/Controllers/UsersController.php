<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name' => 'required|max: 255',
            'apellido' => 'required|max: 255',
            'email' => 'required',
            'password' => 'required',
            'ciudad' => 'required|in:la_paz,cbba,stcz,oruro,potosi,sucre,tarija,beni,pando',                     
            'nombre_usuario' => 'required|max: 255',
            'celular' => 'required',
            'telefono' => 'required',
        ]);

        //dd($request->all());

        User::create(
        ['name'=> $request->name,
        'apellido'=> $request->apellido,
        'email'=> $request->email,
        'password'=> $request->password,
        'ciudad'=> $request->ciudad,
        'nombre_usuario'=> $request->nombre_usuario,       
        'celular'=> $request->celular,
        'telefono'=> $request->telefono,
        
        ]);

        Session::flash('message','Usuario creado exisitosamente');
        return redirect()->route('users.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
         return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

     public function users(){
       return view('users');
    }
}
