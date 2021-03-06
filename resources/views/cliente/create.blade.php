@extends('adminlte::page')

@section('title', 'Mei! App de Administración de la granja')

@section('content_header')
    <h1>Agregar un Cliente</h1>
@stop

@section('content')
    <form class="row g-3" action="/clientes" method="POST">
        @csrf
        <div class="col-12 col-md-12">
            <label class="form-label" >Nombre</label>
            <input type="text" class="form-control" name="inputNombre" maxlength="50" required>
        </div>       
        <div class="col-12 col-md-12">
            <label class="form-label" >Email</label>
            <input type="email" class="form-control" name="inputEmail" maxlength="255" required>
        </div>

        <div class="col-12">
            <a href="/clientes" class="btn btn-secondary">Cancelar</a>
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