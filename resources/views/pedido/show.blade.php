@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver un Pedido</h1>
@stop

@section('content')
    <div class="row g-3">
        <div class="col-2 col-md-2">
            <label class="form-label">ID</label>
            <input type="text" class="form-control no-gray" value="{{$pedido->id}}" readonly>
        </div>
        <div class="col-10 col-md-10">
            <label class="form-label" >Cliente</label>
            <input type="text" class="form-control no-gray" value="{{$pedido->cliente->email}}" readonly>
        </div>
        <div class="col-2">
            <label class="form-label">Cantidad</label>
            <input type="text" class="form-control no-gray" value="{{$pedido->cantidad}}" readonly>
        </div>
        <div class="col-10">
            <label class="form-label">Producto</label>
            <input type="text" class="form-control no-gray" value="{{$pedido->producto->nombre}}" readonly>
        </div>
        @can('viewTimeStamps', App\Models\Pedido::class) 
         <div class="col-6">
            <label class="form-label">Creado</label>
            <input type="text" class="form-control no-gray" value="{{$pedido->created_at}}" readonly>
        </div>        
        <div class="col-6">
            <label class="form-label">Actualizado</label>
            <input type="text" class="form-control no-gray" value="{{$pedido->updated_at}}" readonly>
        </div>
        @endcan       
        <div class="col-12">
            <a href="/pedidos" class="btn btn-secondary">Volver</a>
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