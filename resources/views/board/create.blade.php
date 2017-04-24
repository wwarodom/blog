@extends('template')
@section('title','My board')
@section('content')

<form method="post" action="/boards">
	<legend>New message</legend>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control">
	</div>		
	<div class="form-group">
		<label for="body">Body</label>
		<textarea name="body" class="form-control" rows="4">Enter text here</textarea>
	</div>
	<div>
	<b>From: </b> {{ Auth::user()->name}} <br>
	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	<input type="hidden" name="ip" value="{{Request::getClientIp()}}">
	</div>
	{{csrf_field()}}	
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>

<a href="/boards">Home</a>
@endsection