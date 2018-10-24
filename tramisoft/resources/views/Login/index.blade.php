<!DOCTYPE html>
<html>
<head>
	<title>&#128272 Login</title>
	<style type="text/css">
		body {
		  background: #2d343d;
		}

		.login {
		  margin: 50px auto;
		  width: 300px;
		  padding: 30px 25px;
		  background: white;
		  border: 1px solid #c4c4c4;
		}

		h1.login-title {
		  margin: -28px -25px 25px;
		  padding: 15px 25px;
		  line-height: 30px;
		  font-size: 25px;
		  font-weight: 300;
		  color: #ADADAD;
		  text-align:center;
		  background: #f7f7f7;
		 
		}

		.login-input {
		  width: 285px;
		  height: 50px;
		  margin-bottom: 25px;
		  padding-left:10px;
		  font-size: 15px;
		  background: #fff;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		}
		.login-input:focus {
		    border-color:#6e8095;
		    outline: none;
		  }
		.login-button {
		  width: 100%;
		  height: 50px;
		  padding: 0;
		  font-size: 20px;
		  color: white;
		  text-align: center;
		  background: #f0776c;
		  border: 0;
		  border-radius: 5px;
		  cursor: pointer; 
		  outline:0;
		}

		.login-lost
		{
		  text-align:center;
		  margin-bottom:0px;
		}

		.login-lost a
		{
		  color:#666;
		  text-decoration:none;
		  font-size:13px;
		}
		.login-button:hover{
		  background-color: #FE2E2E;
		}
		.login-input:hover{
		  border: 2px solid #2ECCFA;
		}
		.tramisoft:hover{
			font-size: 14px;
			color: #FE2E2E;

		}
		.alerta{
			width: 100px;
			background-color: white;
			color: #666;
			border-radius: 5px; 
			font-size: 20px;
			margin-bottom: 0;
		}
	</style>

</head>
<body>

	
	 @if(session()->has('flash'))
   		 <div class="alert alert-info">{{session('flash')}}</div>
	 @endif

	<form class="login" action="{{route('login')}}" method="POST">
		{{ csrf_field()}}

	    <h1 class="login-title">Iniciar Sesi&oacute;n</h1>
	    	{!! $errors->first('correoEmp','<span class="alerta">:message</span>')!!}
	    <input type="text" class="login-input" placeholder="Direcci&oacute;n de Correo Electronico" name="correoEmp" autofocus>
	    	{!! $errors->first('contrasenaEmp','<span class="alerta">Ingresa contraseña</span>')!!}
	    <input type="password" class="login-input" placeholder="Contrase&ntilde;a" name="contrasenaEmp">
	    

	    <button class="login-button">Iniciar</button>
	  	<p class="login-lost"><a href="{{url('/')}}" class="tramisoft">Tramisoft</a></p>
  </form>

</body>
</html>