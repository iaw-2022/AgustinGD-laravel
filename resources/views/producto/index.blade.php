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
            <th scope="col">Categoria</th>
            <th scope="col" >Disponibilidad</th>
            <th scope="col">Nombre</th>
            <th scope="col" class="esconder-tabla">Descripción</th>
            <th scope="col" class="esconder-tabla">Precio/Unidad</th>
            <th scope="col" class="esconder-tabla">Imagen</th>
            @can('viewTimeStamps', App\Models\Producto::class)
            <th scope="col" class="esconder-tabla">Actualizado</th>
            <th scope="col" class="esconder-tabla">Creado</th>
            @endcan
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td class="name-overflow">{{$producto->categoria->nombre}}</td>

                    @if($producto->disponible)
                        <td class="p-3 mb-2 bg-success text-white">Disponible</td>
                    @else
                        <td class="p-3 mb-2 bg-danger text-white">No Disponible</td>
                    @endif
                    <td>{{$producto->nombre}}</td>
                    <td class="esconder-tabla">{{$producto->descripcion}}</td>
                    <td class="esconder-tabla">{{$producto->precioPorUnidad}}</td>
                    <td class="esconder-tabla">
                        <a href="{{$producto->imagen_dir}}">Link</a>
                    </td>                    
                    @can('viewTimeStamps', App\Models\Producto::class)
                    <td class="esconder-tabla">{{$producto->updated_at}}</td>
                    <td class="esconder-tabla">{{$producto->created_at}}</td>
                    @endcan
                    <td>
                    @can('viewAny', App\Models\Producto::class)
                    <div class="esconder-boton">
                        @include('componente.boton-ver', ['elemento' => $producto->id, 'ruta' => 'productos'])
                    </div>    
                    @endcan

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
    <style>
        @media (max-width: 1400px) {
            .esconder-tabla{
                display: none;
            }
        }

        @media (min-width: 1400px) {
            .esconder-boton{
                display: none;
            }
        }

        td{
            word-wrap: break-word;
            max-width: 100px;
        }   
    </style>  
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
        @include('componente.alerta')
    @endif 
@stop