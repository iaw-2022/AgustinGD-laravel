@extends('adminlte::page')

@section('title', 'Mei! App de Administración de la granja')

@section('content_header')
    <h1>Administracion de Categorias</h1>
@stop

@section('content')
    @can('create', App\Models\Categoria::class)
        @include('componente.boton-agregar', ['ruta' => 'categorias']) 
    @endcan
    <table id="categorias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->nombre}}</td>
                    <td>{{$categoria->descripcion}}</td>
                    <td class="text-center">
                    @can('viewTimeStamps', App\Models\Categoria::class)
                        @include('componente.boton-ver', ['elemento' => $categoria->id, 'ruta' => 'categorias'])    
                    @endcan
                    @can('update', App\Models\Categoria::class)
                        @include('componente.boton-editar', ['elemento' => $categoria->id, 'ruta' => 'categorias']) 
                    @endcan
                    @can('delete', App\Models\Categoria::class)
                        @include('componente.boton-eliminar', ['elemento' => $categoria->id, 'ruta' => 'categorias.destroy'])  
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
        td{
            word-wrap: break-word;
        }

        .table-max-width{
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
        $('#categorias').dataTable( {
            "lengthMenu": [[-1,5,10,50,100], ["All",5,10,50,100]]
        } );
    } );
    </script>

    @include('componente.boton-eliminar-script')

    @if (session()->has('message'))
        @include('componente.alerta')
    @endif 
@stop