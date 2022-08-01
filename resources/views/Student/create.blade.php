@extends('adminlte::page')

@section('title', 'Lista de Estudantes')

@section('content_header')

@stop

@section('content')
    <div id="app">
        <br />
        <teachercreate-component />
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    <script src="/js/app.js"> </script>
@stop