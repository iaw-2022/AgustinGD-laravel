@extends('layouts.test');

@section('contenido')
<a href="productos/create" class="btn btn-primary">AGREGAR</a>
<h2>Administracion de Productos</h2>

<table class="table table-bordered border-primary">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Categoria</th>
        <th scope="col">Disponibilidad</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio/Unidad</th>
        <th scope="col">Imagen</th>
        <th scope="col">Actualizado</th>
        <th scope="col">Creado</th>
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
                <td>{{$producto->updated_at}}</td>
                <td>{{$producto->created_at}}</td>
                <td>                   
                    <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
                    <a href="/productos/{{$producto->id}}/edit" class="btn btn-info">Editar</a>                       
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Queres eliminar este Producto?')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>Eliminar
                        </button>
                    <form>
                </td>
            </tr>            
        @endforeach
    </tbody>

</table>
@endsection