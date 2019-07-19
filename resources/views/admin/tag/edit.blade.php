@extends('layouts.app')

@section('content')
 	<div class="container">
 		<div class="card">
			  <div class="card-body">
			    Editar Etiquetas

		  {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
					
					@include('admin.tag.partials.form')

				{!! Form::close() !!}

			</div>

		</div>

 	</div>
@endsection