@extends('layout')

@section('content')

	<ul>
		
	
	@foreach ($posts as $post)

		<li>
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->body }}</p>
		</li>

	@endforeach
	</ul>
@endsection