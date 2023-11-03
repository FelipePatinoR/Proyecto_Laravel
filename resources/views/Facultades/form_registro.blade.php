@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Registro de Facultades</h1>
@stop

@section('content')
<div>
    <form action="{{route('registrar_fac')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codfacultad" class="form-label">Codigo Facultad</label>
            <input type="text" class="form-control" name="codfacultad" id="codfacultad" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="nomfacultad" class="form-label">Nombre Facultad</label>
            <input type="text" class="form-control" name="nomfacultad" id="nomfacultad">
        </div>
        
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop