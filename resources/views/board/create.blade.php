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
		<textarea name="body" class="form-control" rows="4">			
		</textarea>
	</div>
	
	{{csrf_field()}}	
	<button type="submit" class="btn btn-primary"></button>
</form>

@endsection