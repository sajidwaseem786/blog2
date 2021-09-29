<!DOCTYPE html>
<html>
<head>
	<title>home package</title>
</head>
<body>

	@if(isset($errors))
	@if($errors->any())
	<div class="alert alert-danger">
<strong>Whoops!!There Were Some Problems With Input</strong><br><br>
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@endif

<h1>home page of imranrbx package</h1>
</body>
</html>