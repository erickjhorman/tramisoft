<!DOCTYPE html>
<html>
<head>
	<title>Perfin Inicio</title>
</head>
<body>

	<div>
		<h1>Bienvenido : {{auth()->user()->nombreEmp}} {{auth()->user()->apellidoEmp}}</h1>
	</div>

	<form method="POST" action="{{route('logout')}}">
		@csrf
		<button>Cerrar</button>
	</form>

</body>
</html>