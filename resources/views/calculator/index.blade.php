@extends('template')

@section('title','Calculator')

@section('content') 
  <form action="/add" method="post">  	
  	<label for="num1">Number1:</label>
  	<input type="text" name="num1" value="{{$num1 or ''}}"/> + <br>
  	<label for="num2">Number2:</label>
  	<input type="text" name="num2" value="{{$num2 or ''}}"> <br>
  	 {{ csrf_field() }}
  	Result =  {{ $result or '' }}  <br>
  	<input type="submit"> <br>
  </form>
  <br>
@endsection