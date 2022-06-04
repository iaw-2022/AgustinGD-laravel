<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Carbon\Carbon;

class PedidoController extends Controller
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
        $this->authorize('viewAny', Pedido::class);

        $pedidos = Pedido::all();
        return view('pedido.index')->with('pedidos', $pedidos)->with('activePedidos', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Pedido::class);

        return view('pedido.create')->with('activePedidos', 'active');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Pedido::class);

        $pedido = new Pedido();
        $pedido->cliente_id = $request->get('inputClienteID');
        $pedido->producto_id = $request->get('inputProductoID');
        $pedido->cantidad = $request->get('inputCantidad');
        $pedido->total = $request->get('inputTotal');
        $pedido->created_at = Carbon::now()->format('Y-m-d H:i:s');
        
        try { 
            $pedido->save();
            $titulo = '¡Agregado!';
            $message = 'Nuevo pedido agregado correctamente.';
            $status = 'success';
        } catch(QueryException $ex){
            $titulo = '¡Error!';
            $message = 'ID de Cliente o Producto inexistente.';
            $status = 'error';
        }        

        session()->flash('titulo', $titulo);
        session()->flash('message', $message);
        session()->flash('status', $status);       
        return redirect('/pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('viewAny', Pedido::class);
        $pedido = Pedido::find($id);

        return view('pedido.show')->with('pedido', $pedido)->with('activePedidos', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Pedido::class);
        $pedido = Pedido::find($id);

        return view('pedido.edit')->with('pedido', $pedido)->with('activePedidos', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('update', Pedido::class);

        $pedido = Pedido::find($id);
        $pedido->cliente_id = $request->get('inputClienteID');
        $pedido->producto_id = $request->get('inputProductoID');
        $pedido->cantidad = $request->get('inputCantidad');
        $pedido->total = $request->get('inputTotal');
        $pedido->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        
        try { 
            $pedido->save();
            $titulo = '¡Editado!';
            $message = 'Pedido editado correctamente.';
            $status = 'success';
        } catch(QueryException $ex){
            $titulo = '¡Error!';
            $message = 'ID de Cliente o Producto inexistente.';
            $status = 'error';
        }  

        session()->flash('titulo', $titulo);
        session()->flash('message', $message);
        session()->flash('status', $status); 
        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Pedido::class);

        $pedido = Pedido::find($id); 

        $pedido->delete();

        $titulo = '¡Eliminado!';
        $message = 'Pedido eliminado correctamente.';
        $status = 'success';
        

        session()->flash('titulo', $titulo);
        session()->flash('message', $message);
        session()->flash('status', $status);
        return redirect('/pedidos');
    }
}
