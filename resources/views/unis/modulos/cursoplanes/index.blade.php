@extends('adminlte::page')

@section('title', 'Curso Planes')

@section('content_header')
    <h1>Curso Planes</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        .jetstream-modal{
            z-index: 9999;
        }

    </style>
@stop

@section('js')
    
    <script src="{{ mix('js/app.js') }}"></script>

    @include('unis.modulos.alertas.alertas')
@stop