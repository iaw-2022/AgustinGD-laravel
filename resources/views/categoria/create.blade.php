@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar una Categoria</h1>
@stop

@section('content')
    <form class="row g-3" action="/categorias" method="POST">
        @csrf
        <div class="col-12 col-md-12">
            <label for="inputNombre" class="form-label" >Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="inputNombre" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="inputDescripcion">Descripción</label>
            <textarea class="form-control" id="inputDescripcion" name="inputDescripcion" rows="3" maxlength="255" required></textarea>
        </div>
        <div class="col-12">
            <label for="inputImagen" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="inputImagen" name="inputImagen" placeholder="pepe.png" maxlength="255" required>
        </div>
        <div class="col-12">
            <a href="/categorias" class="btn btn-secondary">Cancelar</a>
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