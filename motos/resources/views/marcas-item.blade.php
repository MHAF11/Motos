@extends('layouts.main')

@section('titulo superior', 'marcas')

@section('titulo')
marcas - item
@endsection

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
<li class="breadcrumb-item"><a href="{{ route('marcas') }}">Marcas</a></li>
<li class="breadcrumb-item active">Item</li>


@endsection


@section('contenido')

{{ $marca }}

@endsection