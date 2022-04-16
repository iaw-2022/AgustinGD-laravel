@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion de Productos</h1>
@stop

@section('content')
    @can('create', App\Models\Producto::class)
        @include('componente.boton-agregar', ['ruta' => 'productos'])    
    @endcan
    <table id="productos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Categoria</th>
            <th scope="col">Disponibilidad</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio/Unidad</th>
            <th scope="col">Imagen</th>
            @can('viewTimeStamps', App\Models\Producto::class)
            <th scope="col">Actualizado</th>
            <th scope="col">Creado</th>
            @endcan
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    @if($producto->disponible)
                        <td class="p-3 mb-2 bg-success text-white">Disponible</td>
                    @else
                        <td class="p-3 mb-2 bg-danger text-white">No Disponible</td>
                    @endif
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precioPorUnidad}}</td>
                    <td>{{$producto->imagen_dir}}</td>
                    @can('viewTimeStamps', App\Models\Producto::class)
                    <td>{{$producto->updated_at}}</td>
                    <td>{{$producto->created_at}}</td>
                    @endcan
                    <td>
                    @can('update', App\Models\Producto::class)
                        @include('componente.boton-editar', ['elemento' => $producto->id, 'ruta' => 'productos'])    
                    @endcan

                    @can('delete', App\Models\Producto::class) 
                        @include('componente.boton-eliminar', ['elemento' => $producto->id, 'ruta' => 'productos.destroy'])                 
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
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#productos').dataTable( {
            "lengthMenu": [[-1,5,10,50,100], ["All",5,10,50,100]]
        } );
    } );
    </script>

    @include('componente.boton-eliminar-script')

    @if (session()->has('message'))
        @include('componente.alerta-exito')
    @endif 
@stop