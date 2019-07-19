@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2>Editar Categoria</h2>

				{!! Form::model($category, ['route' => 
				['categories.update', $category->id], 'method' => 'PUT']) !!}

				@include('admin.categoria.partials.form')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection