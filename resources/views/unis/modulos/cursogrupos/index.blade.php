@extends('adminlte::page')

@section('title', 'Curso Grupos')

@section('content_header')
    
@stop

@section('content')
    @livewire('modulos.curso-grupos.curso-grupos-index')
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