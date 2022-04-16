<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Http\Request;
use Carbon\Carbon;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);

        $users = User::all();
        return view('user.index')->with('users', $users)->with('activeUsers', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);

        session()->flash('titulo', '¡Agregado!');
        session()->flash('message', 'Nuevo usuaro agregado correctamente.');        
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', User::class);
        $roles = Rol::all();
        $user = User::find($id);

        return view('user.edit')->with('user', $user)->with('roles', $roles)->with('activeUsers', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', User::class);

        $user->rol_id = $request->get('inputRol');
        $user->name = $request->get('inputNombre');
        $user->email = $request->get('inputEmail');
        $user->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $user->save();

        session()->flash('titulo', '¡Editado!');
        session()->flash('message', 'Usuario editado correctamente');
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', User::class);
        $user = User::find($id);
        $user->delete();
        
        session()->flash('titulo', '¡Eliminado!');
        session()->flash('message', 'Usuario eliminado correctamente.');
        return redirect('/users');
    }
}
