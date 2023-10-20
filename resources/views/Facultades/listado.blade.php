@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
<h1>Listado de Facultades</h1>
{{ __('Dashboard') }}
@stop

@section('content')
<p>Bienvenido al listado de Facultades</p>
<div class="float-right">
    <button class="btn btn-primary"><i class="fas fa-check" > Registrar</i></button> 
</div> 

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
     <tbody>
         <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><button class="btn btn-success"><i class="far fa-edit"></i></button> <button class="btn btn-danger"><i class="far fa-trash-alt"></button></td>
        </tr>
    </tbody>
</table>
        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
        <script> console.log('Hi!'); </script>
        @stop