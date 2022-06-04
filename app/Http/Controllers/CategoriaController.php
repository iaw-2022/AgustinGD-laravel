<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Carbon\Carbon;
use Illuminate\Database\QueryException;

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

        $categoria = new Categoria();

        $categoria->nombre = $request->get('inputNombre');
        $categoria->descripcion = $request->get('inputDescripcion');        
        $categoria->imagen_dir = $request->get('inputImagen');
        $categoria->created_at = Carbon::now()->format('Y-m-d H:i:s');

        $categoria->save();

        session()->flash('titulo', '¡Agregado!');
        session()->flash('message', 'Nueva categoria agregada correctamente.');
        session()->flash('status', 'success');        
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
        $this->authorize('viewAny', Categoria::class);
        $categoria = Categoria::find($id);

        return view('categoria.show')->with('categoria', $categoria)->with('activeCategorias', 'active');
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
        $categoria->imagen_dir = $request->get('inputImagen');
        $categoria->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $categoria->save();

        session()->flash('titulo', '¡Editado!');
        session()->flash('message', 'Categoria editada correctamente');
        session()->flash('status', 'success');
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

        try { 
            $categoria->delete();
            $titulo = '¡Eliminado!';
            $message = 'Categoria eliminada correctamente.';
            $status = 'success';
        } catch(QueryException $ex){
            $titulo = '¡Error!';
            $message = 'No se puede eliminar una categoria en uso';
            $status = 'error';
        }
        

        session()->flash('titulo', $titulo);
        session()->flash('message', $message);
        session()->flash('status', $status);
        return redirect('/categorias');
    }
}
