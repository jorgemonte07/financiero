@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1>Crear Personas</h1>
@stop

@section('content')
<form action="/personas" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Celular</label>
    <input id="celular" name="celular" type="number" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="email" class="form-control" tabindex="4">
  </div>
  <a href="/personas" class="btn btn-secondary" tabindex="6">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop