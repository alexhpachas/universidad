@extends('adminlte::page')

@section('title', 'Entidades')

@section('content_header')

    {{-- Cargamos los Stylos de Tailwind --}}
    
    <h1>Lista Entidades</h1>
@stop

@section('content')   

        @livewire('modulos.entidades.entidades-index')

@stop

@section('css')

{{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
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
