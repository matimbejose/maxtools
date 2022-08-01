@extends('adminlte::page')

@section('title', 'Painel Adiministrativo')

@section('content_header')

@stop

@section('content')
    <div id="app">
        <br />
        <dashboard-component/>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop