@extends('adminlte::page')

@section('title', 'Mei! App de Administración de la granja')

@section('content_header')
    <h1>Bienvenido a Mei! Administración</h1>
@stop

@section('content')
<div style='width: 100%; text-align: center;'>
    <img src="/logoMei.png" alt="La vaca Mei." style='height: 100%; width: 100%; max-width: 512px; object-fit: contain;' />        
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet"></link>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
@stop