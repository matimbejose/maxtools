@extends('adminlte::page')

@section('title', 'Lista de Professores')

@section('content_header')

@stop

@section('content')
    <div id="app">
        <br />
        <teacher-component />
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop