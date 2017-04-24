@extends('template')
@section('title','My board')
@section('content')

@foreach( $boards as  $index => $item )
	<div>
		<h4> {{$NUM_PAGE*($page-1) + $index+1}} : {{$item->title}}</h4>
		<p>{{$item->body}}</p>

		<div>
			<b>Tags:</b>
			@foreach($item->tags as $ctag)
				<a href="/boards/searchTag/{{$ctag->id}}"> {{$ctag->name}}</a>
			@endforeach
		</div>
		<br>
		
		<div class="pull-right">
			Last update: {{$item->updated_at}}
			<b>From: {{$item->user()->get()[0]->name}}</b> :: {{$item->ip}}
		</div>

		@can('show',$item)		
			<form method="post" action="boards/{{$item->id}}" class="form-inline">
				<a href="boards/{{$item->id}}" class="btn btn-primary">Show</a> | 
				<a href="boards/{{$item->id}}/edit" class="btn btn-success">Edit</a> |		
				<input type="hidden" name="_method" value="Delete">
				<button class="btn btn-danger">Delete</button> 
				{{csrf_field()}}
			</form>
		@endcan
	</div>
	<hr>
@endforeach

{{ $boards->links() }}
<br><br>

@if ( !Auth::guest() )
	<a href="boards/create">Create new message</a>
	<br>
@endif

@endsection