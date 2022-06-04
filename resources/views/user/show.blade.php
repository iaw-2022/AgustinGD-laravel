@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver un Usuario</h1>
@stop

@section('content')
    <div class="row g-3">
        <div class="col-4 col-md-4">
            <label class="form-label">Rol</label>
            <input type="text" class="form-control no-gray" value="{{$user->rol->nombre}}" readonly>
        </div>
        <div class="col-8 col-md-8">
            <label class="form-label" >Nombre</label>
            <input type="text" class="form-control no-gray" value="{{$user->name}}" readonly>
        </div>
        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="text" class="form-control no-gray" value="{{$user->email}}" readonly>
        </div>
        <div class="col-6">
            <label class="form-label">Creado</label>
            <input type="text" class="form-control no-gray" value="{{$user->created_at}}" readonly>
        </div>
        <div class="col-6">
            <label class="form-label">Actualizado</label>
            <input type="text" class="form-control no-gray" value="{{$user->updated_at}}" readonly>            
        </div> 
        <div class="col-12">
            <a href="/users" class="btn btn-secondary">Volver</a>
        </div>         
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form-control[readonly].no-gray{
            background-color:white !important;
        }
    </style>
@stop

@section('js')
@stop