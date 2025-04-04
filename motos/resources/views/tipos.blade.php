
@extends('layouts.main')

@section('titulo superior', 'Tipos')

@section('titulo')
Tipos
@endsection

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
<li class="breadcrumb-item active">Tipos</li>

@endsection


@section('contenido')

<h1>Todos los Tipos</h1>

@endsection