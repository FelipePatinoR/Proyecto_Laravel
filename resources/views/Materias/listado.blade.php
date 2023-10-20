@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
<h1>Listado de Materias</h1>
{{ __('Dashboard') }}
@stop

@section('content')
<p>Bienvenido al listado de Materias</p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script> @stop