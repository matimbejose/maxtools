@extends('adminlte::page')

@section('title', 'Editar Professor')

@section('content_header')

@stop

@section('content')
    <div id="app">
        <br />
        <teacherupdate-component :teacher="{{ $teacher }}" />
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script src="/js/app.js"> </script>
@stop