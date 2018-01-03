<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de usuarios</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>{{$title}}</h1>
	@if(! empty()$users)
		<ul>
		  @foreach ($users as $user)
				<li> {{$user}}</li>
		  @endforeach
		</ul>
	@else
		<p>No hay usuarios registrados.</p>
	@endif
</body>
</html>