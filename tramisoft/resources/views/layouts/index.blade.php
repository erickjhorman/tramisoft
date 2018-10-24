<!DOCTYPE html>
<html>
<head>
    <title>Tramisoft</title>

<!--Google fonts -->
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c|Merriweather|Montserrat|Open+Sans|Roboto|Roboto+Condensed" rel="stylesheet"> 

<!--Font-Awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- <script type="text/javascript" src="{{ URL::asset('js/tramite.js') }}"></script> -->

<!--Boostrap 4-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--Scroll reveal-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--My css-->
<link href="{{asset('/css/index.css')}}" rel="stylesheet">


<!--Normalize class-->
<link href="{{ asset('/css/Normalize.css') }}" rel="stylesheet">

</head>

<body>

       <div class="container">  
      	   @yield('content')
      	 

          <!--Clase contenedor de boostrap-->
      </div>

	</body>
<!--Boostrap 4 scrips-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<header></header>
</html>