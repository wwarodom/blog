@extends('example/template')

@section('title','Example')

@section('content')
  <h1>Example</h1>
  This is my example
  <a href="example2"> Link to example</a>

  <br><br>
  ==== Non-Blade template ==== <br>
  <?php for( $i=0; $i<5; $i++ ) {  ?>
  	The value i = <?php echo $i; ?> <br>
  <?php } ?>
  
  <?php if ( $name == 'John') {  ?>
     Hello John
  <?php } else {  ?>
  	Hello Other
  <?php } ?>


 <br> ==== Blade template ==== <br>
   @for( $i=0; $i<5; $i++)
      The value i = {{$i}} <br>
   @endfor
  
  @if ( $name == 'John') 
     Hello John
  @else
  	Hello Other
  @endif

@endsection