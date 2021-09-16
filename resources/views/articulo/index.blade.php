@extends('layouts.plantillabase');

@section('contenido')
<h1 class="text-center"> Productos en bodega</h1>

<a href="articulos/create" class="btn btn-success">añadir productos</a>
<table class="table table-info table-striped mt-4"> <!---configuro el tema de la tabla -->
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio/u</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <!---configuro el tbody del controlador articulo, pasando en singular -->
    <tbody>
        @foreach ($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id}}</td>
                <td>{{ $articulo->codigo}}</td>
                <td>{{ $articulo->descripcion}}</td>
                <td>{{ $articulo->cantidad}}</td>
                <td>{{ $articulo->precio}}</td>
                <td>
                    <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection