@extends('layouts.app')

@section('content')
 	<div class="container">
 		<div class="card">
			  <div class="card-body">
			    Crear Etiquetas

			    {!! Form::open(['route' => 'tags.store']) !!}
					
					@include('admin.tag.partials.form')

				{!! Form::close() !!}

			</div>

		</div>

 	</div>
@endsection