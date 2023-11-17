@extends('adminlte::page')

@section('title', 'Actualizacion')

@section('content_header')
<h1>Actualizaciones de Facultades</h1>
@stop

@section('content')
<div>
    <form action="{{route('editar_fac', $facultad -> codfacultad)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codfacultad" class="form-label">Codigo Facultad</label>
            <input type="text" class="form-control" name="editcodfacultad" id="editcodfacultad" aria-describedby="emailHelp" value="{{$facultad -> codfacultad}}" disabled>
        </div>
        <div class="mb-3">
            <label for="nomfacultad" class="form-label">Nombre Facultad</label>
            <input type="text" class="form-control" name="editnomfacultad" id="editnomfacultad" value="{{$facultad -> nomfacultad}}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop