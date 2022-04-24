<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\QueryException;

class ClienteController extends Controller
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
        $this->authorize('viewAny', Cliente::class);

        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes)->with('activeClientes', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Cliente::class);

        return view('cliente.create')->with('activeClientes', 'active');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Cliente::class);

        $cliente = new Cliente();
        $cliente->nombre = $request->get('inputNombre');
        $cliente->email = $request->get('inputEmail');
        $cliente->created_at = Carbon::now()->format('Y-m-d H:i:s');
        
        try { 
            $cliente->save();
            $titulo = '¡Agregado!';
            $message = 'Nuevo cliente agregado correctamente.';
            $status = 'success';
        } catch(QueryException $ex){
            $titulo = '¡Error!';
            $message = 'El email ya esta en uso';
            $status = 'error';
        }        

        session()->flash('titulo', $titulo);
        session()->flash('message', $message);
        session()->flash('status', $status);       
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('viewAny', Cliente::class);
        $cliente = Cliente::find($id);

        return view('cliente.show')->with('cliente', $cliente)->with('activeClientes', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Cliente::class);
        $cliente = Cliente::find($id);

        return view('cliente.edit')->with('cliente', $cliente)->with('activeClientes', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('update', Cliente::class);

        $cliente = Cliente::find($id);
        $cliente->nombre = $request->get('inputNombre');
        $cliente->email = $request->get('inputEmail');
        $cliente->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $cliente->save();

        session()->flash('titulo', '¡Editado!');
        session()->flash('message', 'Cliente editado correctamente');
        session()->flash('status', 'success');
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Cliente::class);

        $cliente = Cliente::find($id);

        try { 
            $cliente->delete();
            $titulo = '¡Eliminado!';
            $message = 'Cliente eliminado correctamente.';
            $status = 'success';
        } catch(QueryException $ex){
            $titulo = '¡Error!';
            $message = 'No se puede eliminar un cliente con pedidos';
            $status = 'error';
        }
        

        session()->flash('titulo', $titulo);
        session()->flash('message', $message);
        session()->flash('status', $status);
        return redirect('/clientes');
    }
}
