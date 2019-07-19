@extends('layouts.app')

@section('content')
 	<div class="container">
 		<div class="card">
			  <div class="card-body">
			   Ver Categoria


			<p><strong>Nombre</strong> {{$categoria->name}} </p>
			<p><strong>slug</strong>   {{$categoria->slug}} </p>

			</div>

		</div>

 	</div>
@endsection