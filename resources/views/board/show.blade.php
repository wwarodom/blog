@extends('template')
@section('title','My board')
@section('content')

	<div>
		<h4>{{$board->title}}</h4>
		<p>{{$board->body}}</p>

			<b>From: </b> {{ Auth::user()->name}} <br>
 
	<hr>

<a href="/boards">Home</a>
<br>

@endsection