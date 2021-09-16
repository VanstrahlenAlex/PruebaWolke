@extends('layouts.plantillabase');

@section('contenido')

<h2>Editarr Productos</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @method('PUT')
    @csrf
<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text"class="form-control" value="{{$articulo->codigo}}" tabindex="1">
</div>

<div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
</div>

<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="text"class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any"value="0.00" value="{{$articulo->precio}}" class="form-control" tabindex="4">
</div>

<a href="/articulos" class="btn btn-danger" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-success" tabindex="6">Guardar</button>

</form>
@endsection