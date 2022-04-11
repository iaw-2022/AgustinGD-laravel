<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Carbon\Carbon;

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
        $productos = Producto::all();
        return view('producto.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('producto.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $producto = Producto::find($id);

        return view('producto.edit')->with('categorias', $categorias)->with('producto', $producto);
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
        $producto = Producto::find($id);

        $producto->categoria_id = $request->get('inputCategoria');
        $producto->disponible = $request->get('inputDisponible');
        $producto->nombre = $request->get('inputNombre');
        $producto->precioPorUnidad = $request->get('inputPrecioPorUnidad');
        $producto->descripcion = $request->get('inputDescripcion');
        $producto->imagen_dir = $request->get('inputImagen');
        $producto->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $producto->save();

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
        $producto = Producto::find($id);
        //$producto->delete();
        return redirect('/productos');
    }
}
