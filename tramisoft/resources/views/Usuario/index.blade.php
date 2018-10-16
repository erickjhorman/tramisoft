<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Usuarios</title>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700|Pacifico');
        body {
          background: #2d343d;
          font: 1em Helvetica;
        }
        .signup {
          float: left;
          width: 300px;
          padding: 30px 20px;
          background-color: white;
          text-align: center;
          border-radius: 5px 5px 5px 5px;
          margin-left: 980px;
          margin-top: 0px;
        }

        [type=text] {
          display: block;
          margin: 0 auto;
          width: 80%;
          border: 0;
          border-bottom: 1px solid rgba(0,0,0,.2);
          height: 45px;
          line-height: 45px;  
          margin-bottom: 10px;
          font-size: 1em;
          color: rgba(0,0,0,.4);
        }

        .botones {
          margin-top: 25px;
          width: 80%;
          border: 0;
          background: #f0776c;
          border-radius: 5px;
          height: 50px;
          color: white;
          font-weight: 400;
          font-size: 1em;    
          cursor: pointer;
        }
        .entrada{
          display: block;
          margin: 0 auto;
          width: 80%;
          border: 0;
          border-bottom: 1px solid rgba(0,0,0,.2);
          height: 45px;
          line-height: 45px;  
          margin-bottom: 10px;
          font-size: 1em;
          color: rgba(0,0,0,.4);
        }
        .btn-hover:hover{
            background: #FE2E2E;
        }
        .encima:hover{
            border-bottom: 2px solid #2ECCFA;
        }
        .cur{
            cursor: pointer;
        }
        .atras{
            width: 70px;
            height: 30px;
            margin-top: 10px;
            margin-left: 10px;
        }
        /*---------estilos de la tabla--------------*/
        .tabla{
            margin: 0;
            color: white;
            position: absolute;
            margin-left: 20px;
            margin-top: 60px;
        }
        .table-fill{
            border-radius:3px;
            border-collapse: collapse;
            height: 100px;
            margin: auto;
            padding:5px;
            width: 130%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            animation: float 5s infinite;
        }
        th {
          color:#D5DDE5;;
          background:#1b1e24;
          border-bottom:4px solid #9ea7af;
          border-right: 1px solid #343a45;
          font-size:16px;
          font-weight: 100;
          padding:11px;
          text-align:left;
          text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
          vertical-align:middle;
        }
        th:first-child {
          border-top-left-radius:3px;
        }

        th:last-child {
          border-top-right-radius:3px;
          border-right:none;
        }

        tr {
          border-top: 1px solid #C1C3D1;
          border-bottom-: 1px solid #C1C3D1;
          color:#666B85;
          font-size:16px;
          font-weight:normal;
          text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
        }

        tr:hover td, .btn-tabla:hover{
          background:#4E5066;
          color:#FFFFFF;
          border-top: 1px solid #22262e;
        }

        tr:first-child {
          border-top:none;
        }

        tr:last-child {
          border-bottom:none;
        }

        tr:nth-child(odd) td {
          background:#EBEBEB;
        }

        tr:nth-child(odd):hover td {
          background:#4E5066;
        }

        tr:last-child td:first-child {
          border-bottom-left-radius:3px;
        }

        tr:last-child td:last-child {
          border-bottom-right-radius:3px;
        }

        td {
          background:#FFFFFF;
          padding:20px;
          text-align:left;
          vertical-align:middle;
          font-weight:100;
          font-size:15px;
          text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
          border-right: 1px solid #C1C3D1;
        }

        td:last-child {
          border-right: 0px;
        }

        th.text-left {
          text-align: left;
        }

        th.text-center {
          text-align: center;
        }

        th.text-right {
          text-align: right;
        }

        td.text-left {
          text-align: left;
        }

        td.text-center {
          text-align: center;
        }

        td.text-right {
          text-align: right;
        }
        .tabla-columna-25{
            width: 100px;
        }
        .btn-tabla{
            text-decoration: none;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            color: #666B85;
        }
        tr:hover .btn-tabla{
            color: #FFFFFF;
        }
        .titulo{
            color: white;
            float: right;
            margin-right: 120px;
            font-family: 'Pacifico', cursive;
        }
        .titulo-hover:hover{
        	font-size: 34px;
        }
        .tabla-columna-50{
        }
    </style>
</head>

<body>
  
  <div class="titulo">
      <h1><a  style="text-decoration: none; color: white;" class="titulo-hover" href="{{url('/')}}">Tramisoft</a></h1>
  </div>
  <form action="{{route('perfil')}}" method="GET">
   <div class="boton">
   <button class="botones atras btn-hover" href="{{url('/inicio/perfil')}}">
       Atr&aacute;s
   </button>
   </div>
   </form>
    <div class='signup'>
     <form>
       <input type='text' placeholder='Nombre:' class="entrada encima" />
       <input type='text' placeholder='Apellido:'class="entrada encima"  />
       <input type='text' placeholder='Identificaci&oacute;n:' class="entrada encima" />
       <input type='email' placeholder='Correo:' class="entrada encima" />
       <input type='password' placeholder='Contrase&ntilde;a:' class="entrada encima" />
       <input type='password' placeholder='Confirmar Contrase&ntilde;a:' class="entrada encima" />
       <select name="nombre"  id="" class="entrada encima cur">
       <option selected="true" disabled="disabled">Escoger Cargo</option>
       @if(count($cargos))
       @foreach($cargos as $cargo)
       <option  class="cur">{{$cargo->nombreRol}}</option>
       @endforeach
       @endif
       </select>
       <input type='submit' class="btn-hover botones" placeholder='SUBMIT' />
     </form>
  </div>
  
  <div class="tabla">
       <table class="table-fill">
            <thead>
                <tr>
                    <th class="text-left tabla-columna-25">Nombre</th>
                    <th class="text-left tabla-columna-25">Apellido</th>
                    <th class="text-left ">Correo</th>
                    <th class="text-left tabla-columna-25">Cargo</th>
                    <th class="text-left tabla-columna-25">Editar</th>
                </tr>
            </thead>
            <tbody class="table-hover">
              @if(count($datos))
               @foreach($datos as $dato)
                <tr>
                    <td class="text-left">{{$dato->nombreEmp}}</td>
                    <td class="text-left">{{$dato->apellidoEmp}}</td>
                    <td class="text-left tabla-columna-50">{{$dato->correoEmp}}</td>
                    <td class="text-left">{{$dato->nombreRol}}</td>
                    <td class="text-left">
                        <a href="#" class="btn-tabla">editar</a>
                        <a href="#" class="btn-tabla">borrar</a>
                    </td>
                </tr>
                @endforeach
               @endif
            </tbody>
  </div>
</body>
</html>