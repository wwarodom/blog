@extends('template')
@section('title','My board')
@section('content')

	<div>
		<h4>{{$board->title}}</h4>
		<p>{{$board->body}}</p>
	</div>
	<hr>

<a href="/boards">Home</a>
<br>

@endsection