<!DOCTYPE html>
<html>
<head>
	<title>Tramisoft - @yield('title')</title>
	<!--Boostrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<link href="{{ asset('/css/solicitante.css') }}" rel="stylesheet">



</head>
<body>


      <div class="container">  
      	 @yield('content')

          <!--Clase contenedor de boostrap-->
      </div>
      

 <!--JavaScrip y Jquery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  


<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/filtrarCatalogos.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('js/validaciones_solicitante.js') }}"></script> 



<!-- {!! Html::script('js/jquery') !!} Forma de llamar archivos externos en laravel --> 




</body>
</html>

<!-- Este es el layout de solicitante para mandejar blade motor de plantilla-->
