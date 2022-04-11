@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar un Producto</h1>
@stop

@section('content')
    <form class="row g-3" action="/productos/{{$producto->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-4 col-md-4">
            <label for="inputDisponible" class="form-label">Disponibilidad</label>
            <select id="inputDisponible" name="inputDisponible" class="form-select">
                @if($producto->disponible)
                    <option selected value="true">Disponible</option> 
                    <option value="false">No Disponible</option>
                @else
                    <option value="true">Disponible</option> 
                    <option selected value="false">No Disponible</option>
                @endif
                    
            </select>
        </div>
        <div class="col-8 col-md-8">
            <label for="inputCategoria" class="form-label">Categoria</label>
            <select id="inputCategoria" name="inputCategoria" class="form-select">
                @foreach ($categorias as $categoria)
                    @if($producto->categoria->id == $categoria->id)
                        <option selected value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @else
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endif
                @endforeach      
            </select>
        </div>
        <div class="col-4 col-md-4">
            <label for="inputPrecioPorUnidad" class="form-label">Precio por Unidad</label>
            <input type="number" step="0.01" class="form-control" id="inputPrecioPorUnidad" name="inputPrecioPorUnidad" value="{{$producto->precioPorUnidad}}" required>
        </div>
        <div class="col-8 col-md-8">
            <label for="inputNombre" class="form-label" >Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="inputNombre" maxlength="50" value="{{$producto->nombre}}" required>
        </div>
        <div class="form-group">
            <label for="inputDescripcion">Descripción</label>
            <textarea class="form-control" id="inputDescripcion" name="inputDescripcion" rows="3" maxlength="255" required>{{$producto->descripcion}}</textarea>
        </div>
        <div class="col-12">
            <label for="inputImagen" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="inputImagen" name="inputImagen" placeholder="pepe.png" maxlength="255" value="{{$producto->imagen_dir}}" required>
        </div>

    <div class="col-12">
        <a href="/productos" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>   
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')

@stop