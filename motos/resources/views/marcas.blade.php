
@extends('layouts.main')

@section('titulo superior', 'marcas')

@section('titulo')
marcas
@endsection

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
<li class="breadcrumb-item active">marcas</li>
@endsection


@section('contenido')

<h1>Todas las marcas</h1>


<table class="table table-bordered table-hover">
 	<thead class="table-primary">
 		<tr>
 			<th>ID</th>
 			<th>Nombre</th>
 			<th>Logo</th>
 			<th>País</th>
 			<th>Año</th>
 			<th>Activo</th>
 			<th>Baja</th>
 			<th>Registrado</th>
 			<th>Acciones</th>
 		</tr>
 	</thead>
 	<tbody>
		@foreach($marcas as $marca)

			<tr>
				<td>{{ $marca->id }}</td>
				<td>{{ $marca->nombre }}</td>
				<td>{{ $marca->logo }}</td>
				<td>{{ $marca->pais->nombre ?? 'Sin país' }}</td>
				<td>{{ $marca->año }}</td>
				<td>{{ $marca->activo }}</td>
				<td>{{ $marca->terminacion }}</td>
				<td>{{ $marca->created_at }}</td>
				<td>
					<a class="btn btn-sm btn-primary" href="{{ route('marcas.item', $marca->id) }}">
						<i class="fa fa-eye"></i>
					</a>
				</td>
			</tr>

		@endforeach 		
 	</tbody>
 	
</table>



@endsection
