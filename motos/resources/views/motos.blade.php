
@extends('layouts.main')

@section('titulo superior', 'Motos')

@section('titulo')
Motos
@endsection

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
<li class="breadcrumb-item active">Motos</li>

@endsection


@section('contenido')

<h1>Todas las Motos</h1>

@endsection
