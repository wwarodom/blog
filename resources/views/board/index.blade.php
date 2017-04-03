@extends('template')
@section('title','My board')
@section('content')

@foreach( $boards as  $index => $item )
	<div>
		<h4> {{++$index}} : {{$item->title}}</h4>
		<p>{{$item->body}}</p>
	</div>
	<hr>
@endforeach

<a href="boards/create">Create new message</a>
<br>

@endsection