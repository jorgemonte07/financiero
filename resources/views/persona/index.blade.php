@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1>Lista de Personas</h1>
@stop

@section('content')
<a href="personas/create" class="btn btn-primary mb-3">Crear</a>

<table id="personas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Documento</th>
            <th scope="col">Celular</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $persona)
        <tr>
            <td>{{$persona->id}}</td>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellido}}</td>
            <td>{{$persona->documento}}</td>
            <td>{{$persona->celular}}</td>
            <td>{{$persona->correo}}</td>
            <td>
                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                <a href="/personas/{{ $persona->id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>  
    <script>new DataTable('#personas');</script> 
@stop