@extends('template')
@section('title','My board')
@section('content')

<form method="post" action="/boards/{{$board->id}}">
	<legend>Edit message</legend>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" value="{{$board->title}}">
	</div>		
	<div class="form-group">
		<label for="body">Body</label>
		<textarea name="body" class="form-control" rows="4">{{$board->body}}</textarea>
	</div>

	<b>From: </b> {{ Auth::user()->name}} <br>
	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	<input type="hidden" name="ip" value="{{Request::getClientIp()}}">
 

	<input type="hidden" name="_method" value="PUT">
	{{csrf_field()}}	
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>

<a href="/boards">Home</a>
@endsection