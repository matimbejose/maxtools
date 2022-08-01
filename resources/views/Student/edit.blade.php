@extends('adminlte::page')

@section('title', 'Editar  Estudantes')

@section('content_header')

@stop

@section('content')
    <div id="app">
        <br />
        <studentupdate-component :student="{{ $student }} "/>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop