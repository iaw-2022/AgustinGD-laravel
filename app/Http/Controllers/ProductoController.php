<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class ProductoController extends Controller
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
        if (! Gate::allows('viewAny', Producto::class)) {
            Auth::logout();
            abort(403, "Te deben asignar un Rol para acceder");
        }

        $productos = Producto::all();
        return view('producto.index')->with('productos', $productos)->with('activeProductos', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Producto::class);

        $categorias = Categoria::all();
        return view('producto.create')->with('categorias', $categorias)->with('activeProductos', 'active');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Producto::class);

        $productos = new Producto();

        $productos->categoria_id = $request->get('inputCategoria');
        $productos->disponible = $request->get('inputDisponible');
        $productos->nombre = $request->get('inputNombre');
        $productos->precioPorUnidad = $request->get('inputPrecioPorUnidad');
        $productos->descripcion = $request->get('inputDescripcion');
        $productos->imagen_dir = $request->get('inputImagen');
        $productos->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $productos->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $productos->save();

        session()->flash('titulo', '¡Agregado!');
        session()->flash('message', 'Nuevo producto agregado correctamente.');
        session()->flash('status', 'success');        
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('viewAny', Producto::class);
        $producto = Producto::find($id);

        return view('producto.show')->with('producto', $producto)->with('activeProductos', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Producto::class);

        $categorias = Categoria::all();
        $producto = Producto::find($id);

        return view('producto.edit')->with('categorias', $categorias)->with('producto', $producto)->with('activeProductos', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('update', Producto::class);

        $producto = Producto::find($id);

        $producto->categoria_id = $request->get('inputCategoria');
        $producto->disponible = $request->get('inputDisponible');
        $producto->nombre = $request->get('inputNombre');
        $producto->precioPorUnidad = $request->get('inputPrecioPorUnidad');
        $producto->descripcion = $request->get('inputDescripcion');
        $producto->imagen_dir = $request->get('inputImagen');
        $producto->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $producto->save();

        session()->flash('titulo', '¡Editado!');
        session()->flash('message', 'Producto editado correctamente');
        session()->flash('status', 'success');
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Producto::class);

        $producto = Producto::find($id);
        $producto->delete();

        session()->flash('titulo', '¡Eliminado!');
        session()->flash('message', 'Producto eliminado correctamente.');
        session()->flash('status', 'success');
        return redirect('/productos');
    }
}
