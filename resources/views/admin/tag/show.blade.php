@extends('layouts.app')

@section('content')
 	<div class="container">
 		<div class="card">
			  <div class="card-body">
			   Ver Etiqueta


			<p><strong>Nombre</strong> {{$tag->name}} </p>
			<p><strong>Slug</strong>   {{$tag->slug}} </p>

			</div>

		

		</div>

 	</div>
@endsection