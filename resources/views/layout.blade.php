<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="{{Auth::check() ? Auth::user()->id:' '}}">
</head>
<body>
@yield("content")
</body>
</html>