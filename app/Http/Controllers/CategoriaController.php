<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Carbon\Carbon;

class CategoriaController extends Controller
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
        $this->authorize('viewAny', Categoria::class);

        $categorias = Categoria::all();
        return view('categoria.index')->with('categorias', $categorias)->with('activeCategorias', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Categoria::class);

        return view('categoria.create')->with('activeCategorias', 'active');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Categoria::class);

        $categorias = new Categoria();

        $categorias->nombre = $request->get('inputNombre');
        $categorias->descripcion = $request->get('inputDescripcion');
        $categorias->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $categorias->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $categorias->save();

        session()->flash('titulo', '¡Agregado!');
        session()->flash('message', 'Nueva categoria agregada correctamente.');        
        return redirect('/categorias');
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
        $this->authorize('update', Categoria::class);
        $categoria = Categoria::find($id);

        return view('categoria.edit')->with('categoria', $categoria)->with('activeCategorias', 'active');
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
        $this->authorize('update', Categoria::class);

        $categoria = Categoria::find($id);
        $categoria->nombre = $request->get('inputNombre');
        $categoria->descripcion = $request->get('inputDescripcion');
        $categoria->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $categoria->save();

        session()->flash('titulo', '¡Editado!');
        session()->flash('message', 'Categoria editada correctamente');
        return redirect('/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Categoria::class);

        $categoria = Categoria::find($id);
        $categoria->delete();

        session()->flash('titulo', '¡Eliminado!');
        session()->flash('message', 'Categoria eliminada correctamente.');
        return redirect('/categorias');
    }
}
