@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar un Pedido</h1>
@stop

@section('content')
    <form class="row g-3" action="/pedidos/{{$pedido->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-12 col-md-12">
            <label for="inputClienteID" class="form-label" >ID_Cliente</label>
            <input type="number" class="form-control" id="inputClienteID" name="inputClienteID" value="{{$pedido->cliente->id}}" required>
        </div>
        <div class="col-12 col-md-12">
            <label for="inputProductoID" class="form-label" >ID_Producto</label>
            <input type="number" class="form-control" id="inputProductoID" name="inputProductoID" value="{{$pedido->producto->id}}" required>
        </div>
        <div class="col-12 col-md-12">
            <label for="inputCantidad" class="form-label" >Cantidad</label>
            <input type="number" class="form-control" id="inputCantidad" name="inputCantidad" value="{{$pedido->cantidad}}" required>
        </div>
        <div class="col-12 col-md-12">
            <label for="inputTotal" class="form-label">Total</label>
            <input type="number" step="0.01" class="form-control" id="inputTotal" name="inputTotal" value="{{$pedido->total}}" {{$editParcial}}>
        </div>
        <div class="col-12">
            <a href="/pedidos" class="btn btn-secondary">Cancelar</a>
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