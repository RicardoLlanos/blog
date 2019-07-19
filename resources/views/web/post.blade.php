@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1> {{ $post->name }} </h1>
		<p>Categoria
		 <a href="{{ route('category', $post->category->slug) }}"> {{ $post->category->name }}</a></p>


<div class="card" style="width: 75rem;">
  <img src="{{asset('imagenes/' .$post->file)}}" height="300px" width="850px">
  <div class="card-body">
    <h5 class="card-title"> {{ $post->body}} </h5>
    <hr>
   Etiquetas 
   @foreach($post->tags as $tag)
		<a href="{{ route('tag', $tag->slug) }}">
			{{ $tag->name }}
		</a>
   @endforeach
  </div>
</div>	
@endsection


