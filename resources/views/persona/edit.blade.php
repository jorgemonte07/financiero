@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1>Editar Personas</h1>
@stop

@section('content')
<form action="/personas/{{$persona->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$persona->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$persona->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="number" class="form-control" value="{{$persona->documento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Celular</label>
    <input id="celular" name="celular" type="number" class="form-control" value="{{$persona->celular}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="email" class="form-control" value="{{$persona->correo}}">
  </div>
  <a href="/personas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop