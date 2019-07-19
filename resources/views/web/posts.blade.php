@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>Lista de Articulo</h1>
			
			


		@foreach($posts as $post)
			<div class="card" style="width: 75rem;">
  <img src="{{asset('imagenes/' .$post->file)}}" height="300px" width="850px">
  <div class="card-body">
    <h5 class="card-title">{{ $post->name }}</h5>
    <p class="card-text">{{ $post->body}}.</p>
    <a href="{{ route('post', $post->slug) }}" class="btn btn-primary">Leer más</a>
  </div>
</div>
		@endforeach
		
		{{ $posts->render() }}
	</div>
</div>
@endsection