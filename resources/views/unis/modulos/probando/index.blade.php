@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @livewire('modulos.probando.probando-index')
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