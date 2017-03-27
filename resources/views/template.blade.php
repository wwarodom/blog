<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

<div class="panel panel-default">
	<div class="container">
		<h1>@yield('title')</h1>
	</div>
</div>

<div class="container">
	@section('content')	
	@show
</div>

<div class="panel panel-footer text-center">
	Designed by: Warodom
</div>

</body>
</html>