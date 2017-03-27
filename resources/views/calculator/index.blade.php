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
  <br><hr>
  <form action="/val" method="post">
  	<label>Email:</label>
  	<input type="email" name="email" value="foo@bar.com"><br>
  	<label>Boolean (1 or 0)</label>
  	<input type="text" name="flag" value="1"><br>
  	<label>Alpha:</label>
  	<input type="text" name="str" value="myString"><br>
  	<label>Confirm:</label>
  	<input type="text" name="str_confirmation" value="myString"><br>
  	<label>Integer</label>
  	<input type="text" name="integer" value="123"><br>
  	<label>IP</label>
  	<input type="text" name="ip" value="FE80::0"> <br>
  	{{ csrf_field() }}
  	<button type="submit">Submit</button>
  </form>
  <br>
@endsection