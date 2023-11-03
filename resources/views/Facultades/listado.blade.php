@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>
@stop

@section('content')
    <p>Bienvenido al listado de Facultades</p>
    <div class="float-right">
        <a href="{{route('form_registro_fac')}}" class="btn btn-primary"><i class="fas fa-check" > Registrar</i></a> 
    </div> 

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo Facultad</th>
                <th scope="col">Nombre Facultad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $fac = 1;
            @endphp
            @foreach($facultades as $fac)
                <tr>
                    <th scope="row" >{{$fac->codfacultad}}</th>
                    <td>{{$fac->nomfacultad}}</td>
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