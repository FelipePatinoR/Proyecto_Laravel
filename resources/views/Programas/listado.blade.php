@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
<h1>Listado de Programas</h1>
{{ __('Dashboard') }}
@stop

@section('content')
<p>Bienvenido al listado de Programas</p>
<div class="float-right">
    <button class="btn btn-primary"><i class="fas fa-check" > Registrar</i></button> </div> <table class="table">
        <thead> <tr>
        <th scope="col">Codigo Programa</th>
        <th scope="col">Nombre Programa</th>
        <th scope="col">Facultad</th>
        <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
            @php
                $pro = 1;
            @endphp
            @foreach($programas as $pro)
            <tr>
            <th scope="row">{{$pro->codprograma}}</th>
            <td>{{$pro->nomprograma}}</td>
            <td>{{$pro->nomfacultad}}</td>

            <td>
                <button class="btn btn-success"><i class="far fa-edit"></i></button>
                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
        <script> console.log('Hi!'); </script>
        @stop