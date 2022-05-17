@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar un Usuario</h1>
@stop

@section('content')
    <form class="row g-3" action="/users/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')        
        <div class="col-4 col-md-4">
            <label for="inputRol" class="form-label">Rol</label>
            <select id="inputRol" name="inputRol" class="form-select" >
                @foreach ($roles as $rol)
                    @if($user->rol->id == $rol->id)
                        <option selected value="{{$rol->id}}">{{$rol->nombre}}</option>
                    @else
                        <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                    @endif
                @endforeach      
            </select>
        </div>
        <div class="col-8 col-md-8">
            <label for="inputNombre" class="form-label" >Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="inputNombre" maxlength="50" value="{{$user->name}}" required>
        </div>
        <div class="col-12 col-md-12">
            <label for="inputEmail" class="form-label" >Email</label>
            <input type="text" class="form-control" id="inputEmail" name="inputEmail" maxlength="50" value="{{$user->email}}" required>
        </div>

    <div class="col-12">
        <a href="/users" class="btn btn-secondary">Cancelar</a>
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