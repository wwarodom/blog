@extends('template')
@section('title','My board')
@section('content')

@foreach( $boards as  $index => $item )
	<div>
		<h4> {{$NUM_PAGE*($page-1) + $index+1}} : {{$item->title}}</h4>
		<p>{{$item->body}}</p>

		<form method="post" action="boards/{{$item->id}}" class="form-inline">
			<a href="boards/{{$item->id}}" class="btn btn-primary">Show</a> | 
			<a href="boards/{{$item->id}}/edit" class="btn btn-success">Edit</a> |		
			<input type="hidden" name="_method" value="Delete">
			<button class="btn btn-danger">Delete</button> 
			{{csrf_field()}}
		</form>
	</div>
	<hr>
@endforeach

{{ $boards->links() }}
<br><br>
<a href="boards/create">Create new message</a>
<br>

@endsection