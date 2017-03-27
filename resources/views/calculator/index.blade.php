@extends('template')

@section('title','Calculator')

@section('content') 

	
   @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif


  <form action="/add" method="post">  	
  	<label for="num1">Number1:</label>
  	<input type="text" name="num1" value="{{$num1 or ''}}" /> + <br>
  	<label for="num2">Number2:</label>
  	<input type="number" name="num2" value="{{$num2 or ''}}" > <br>
  	 {{ csrf_field() }}
  	Result =  {{ $result or '' }}  <br>
  	<input type="submit"> <br>
  </form>
  <br>
@endsection