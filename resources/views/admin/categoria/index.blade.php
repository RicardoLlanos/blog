@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2>Lista de Categorias</h2>
				<a href="{{ route('categories.create') }}" 
				class="btn btn-sm btn-primary float-right">
					Crear
				</a>

				<table class="table table-striped table-hover table-condensed">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Cuerpo</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					@foreach($categories as $categoria)
						<tr>
							<td>{{ $categoria->name}}</td>
							<td> {{ $categoria->body}}</td>

							<td width="10px">
								<a href="{{ route('categories.show', $categoria->id) }}" class="btn btn-sm btn-default">Ver</a>
							</td>


							<td width="10px">
								<a href="{{ route('categories.edit', $categoria->id) }}">editar</a>
							</td>

							<td width="10px">
								{!! Form::open(['route' => ['categories.destroy', $categoria->id], 
								'method' => 'DELETE']) !!}
								<button class="btn btn-sm btn-danger">
									Eliminar
								</button>
							</td>
						</tr>

					@endforeach
				</table>
			</div>
			{{ $categories->render() }}
		</div>
	</div>
@endsection