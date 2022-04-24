@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion de Pedidos</h1>
@stop

@section('content')
    @can('create', App\Models\Pedido::class)
        @include('componente.boton-agregar', ['ruta' => 'pedidos'])    
    @endcan
    <table id="pedidos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>         
                <th scope="col">Cliente</th>
                <th scope="col" class="esconder-modo-celular">Producto</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td class="columna-max-width">{{$pedido->id}}</td>                    
                    <td class="columna-max-width">{{$pedido->cliente->email}}</td>
                    <td class="columna-max-width esconder-modo-celular">{{$pedido->producto->nombre}}</td>
                    <td class="text-center">
                    @can('viewAny', App\Models\Pedido::class)
                        @include('componente.boton-ver', ['elemento' => $pedido->id, 'ruta' => 'pedidos'])    
                    @endcan
                    @can('update', App\Models\Pedido::class)
                        @include('componente.boton-editar', ['elemento' => $pedido->id, 'ruta' => 'pedidos'])    
                    @endcan
                    @can('delete', App\Models\Pedido::class) 
                        @include('componente.boton-eliminar', ['elemento' => $pedido->id, 'ruta' => 'pedidos.destroy'])                 
                    @endcan                     
                    </td>
                </tr>           
            @endforeach
        </tbody>

    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet"></link>
    <style>
        @media (max-width: 768px) {
            .esconder-modo-celular{
                display: none;
            }
        }

        td{
            word-wrap: break-word;
        }

        .columna-max-width{
            max-width: 100px;
        }
        
        .boton-accion-size {
            height: 23px; 
            width: 23px;
        }
    </style> 
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#pedidos').dataTable( {
            "lengthMenu": [[-1,5,10,50,100], ["All",5,10,50,100]]
        } );
    } );
    </script>

    @include('componente.boton-eliminar-script')

    @if (session()->has('message'))
        @include('componente.alerta')
    @endif 
@stop