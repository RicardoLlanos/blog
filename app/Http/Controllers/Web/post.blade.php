@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>Detalle del POST</h1>


<div class="card" style="width: 75rem;">
  <img src="{{asset('imagenes/' .$post->file)}}" height="300px" width="850px">
  <div class="card-body">
    <h5 class="card-title"> </h5>
    <p class="card-text">{{ $post->body}}.</p>
    <a href="#" class="btn btn-primary">Leer más</a>
  </div>
</div>
		
		{{ $posts->render() }}
	</div>
</div>
@endsection