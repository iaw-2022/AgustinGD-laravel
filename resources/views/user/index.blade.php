@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion de Usuarios</h1>
@stop

@section('content')
    @can('create', App\Models\User::class)
        @include('componente.boton-agregar', ['ruta' => 'users'])    
    @endcan
    <table id="users" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
            <th scope="col">id</th>
            <th scope="col">Rol</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>            
            <th scope="col">Actualizado</th>
            <th scope="col">Creado</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->rol->nombre}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                    @can('update', App\Models\User::class)
                        @include('componente.boton-editar', ['elemento' => $user->id, 'ruta' => 'users'])    
                    @endcan

                    @can('delete', App\Models\User::class) 
                        @include('componente.boton-eliminar', ['elemento' => $user->id, 'ruta' => 'users.destroy'])                 
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
        $('#users').dataTable( {
            "lengthMenu": [[-1,5,10,50,100], ["All",5,10,50,100]]
        } );
    } );
    </script>

    @include('componente.boton-eliminar-script')

    @if (session()->has('message'))
        @include('componente.alerta')
    @endif 
@stop