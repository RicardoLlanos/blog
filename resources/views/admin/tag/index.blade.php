@extends('layouts.app')

@section('content')
 	<div class="container">
 		<div class="card">
			  <div class="card-body">
			    <h2>Lista de Etiquetas</h2>
			    <a href="{{ route('tags.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
			  </div>	
		
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th width="10px">ID</th>
					<th>Nombre</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tags as $tag)
				 <tr>
				 	<td>{{ $tag->id }}</td>
				 	<td>{{ $tag->name }}</td>
				 	<td width="10px">
				 		<a href="{{ route('tags.show', $tag->id) }}"
				 		class="btn btn-sm btn-default">
				 	Ver
						 </a>
					</td>

					<td width="10px">
						<a href="{{ route('tags.edit', $tag->id) }}">
							editar
						</a>
					</td>

					<td width="10px">
						{!! Form::open(['route' => ['tags.destroy', $tag->id],
						'method' => 'DELETE']) !!}
							<button class="btn btn-sm btn-danger">
								Eliminar
							</button>

						{!! Form::close() !!}
					</td>

				 </tr>
					
				@endforeach
			</tbody>

		</table>
		</div>

		{{ $tags->render() }}
 	</div>
@endsection