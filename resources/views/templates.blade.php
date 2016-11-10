<DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
	@include('Inicios y mas')

	<section>
		@yield ('content')
	</section>
	<script src="{{assets ('plugins/jquery/js/jquery-3.1.1.js')}}"></script>
	<script src="{{assets ('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
