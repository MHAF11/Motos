
@extends('layouts.main')

@section('titulo superior', 'Paises')

@section('titulo')
Paises
@endsection

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
<li class="breadcrumb-item active">Paises</li>

@endsection


@section('contenido')

<h1>Todos los Paises</h1>

@endsection
