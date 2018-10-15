<!DOCTYPE html>
<html>
<head>
	<title>Perfin Inicio</title>
	<style type="text/css">
        /*
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700|Pacifico');
        font-family: 'Montserrat', sans-serif;
        font-family: 'Pacifico', cursive;*/ 
        
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700|Pacifico');
        @use postcss-cssnext;

        /* helpers/grid.css */
        
        .grid {
          margin-left: 1050px;
          margin-top: -90px;
          margin-right: auto;
          max-width: 48em;
          width: 300px;
        }


        * {
          box-sizing: inherit;
        }

        html {
          box-sizing: border-box;
          height: 100%;
        }

        body {
          font-family: 'Roboto', sans-serif;
          line-height: 1.75;
          margin: 0;
          min-height: 100%;
          background-color: #2d343d;
        }

        /* layout/header.css */

        .header {
          padding-bottom: 1em;
          padding-top: 1em;
        }



        .header.is-active::after {
          opacity: 1;
        }

        /* layout/main.css */

        .main {
          padding-top: 6em;
          padding-bottom: 6em;
        }
        .navigation a {
          color: inherit;
          display: block;
          text-decoration: none;
          color: white;
        }

        .navigation .is-active {
          color: #fff;
          padding-left: 1em;
          padding-right: 1em;
          border-radius: 999px;
        }

        .navigation__list {
          list-style: none;
          margin: -0.5em;
          padding: 0;
        }
        .session{
            
        }

        .navigation__list--inline {
          display: flex;
        }

        .navigation__item {
          margin: 0.5em;
        }
        .barra-hover:hover{
          background-color: #f0776c;     
        }
        .act{
            background-color: #f0776c;
        }
        /*--------barra lateral-------------*/
        .sidebar {
          line-height: 2.5em;
          position: fixed;
          width: 20%;
          height: 350px;
          background: #2d343d;
          font-size: 1.3em;
          margin-top: 20px;
          border: 2px solid white;
          border-radius: 9%;
          margin-left: 20px;
        }
         .barra-lateral{
            list-style: none;
        }
        .lateral{
            font-family: 'Roboto', sans-serif;
            text-decoration: none;
            color: white;
            
        }
        .logo{
            color: white;
            font-family: 'Pacifico', cursive;
        }
        .bienvenida{
            text-align: center;
            color: white;
            margin-top: -50px;
            
        }
        .titulo{
        margin-left: 20px;
        }
        .enlaces:hover{
            font-size: 22px;
            color: #f0776c;
            
        }
        /*---------------------diseño de la tabla-----------------*/
        .tabla{
            margin-left:350px;
            margin-top: 70px;
            width: 600px;
            color: white;
        }
        .table-fill{
            border-radius:3px;
            border-collapse: collapse;
            height: 320px;
            margin: auto;
            max-width: 600px;
            padding:5px;
            width: 100%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            animation: float 5s infinite;
        }
        th {
          color:#D5DDE5;;
          background:#1b1e24;
          border-bottom:4px solid #9ea7af;
          border-right: 1px solid #343a45;
          font-size:23px;
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

        tr:hover td {
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


	</style>
</head>
<body>
  <div class="logo">
      <h1 class="titulo">Tramisoft</h1>
  </div>
   <header class="header sticky sticky--top js-header">
  <div class="grid">
    <nav class="navigation">
      <ul class="navigation__list navigation__list--inline">
        <li class="navigation__item"><a href="#" class="is-active act">Home</a></li>
        <li class="navigation__item active session"><a href="{{route('logout')}}" class="is-active barra-hover" 
        onclick="event.preventDefault(); document.getElementById('regresar').submit();" >Cerrar Sesion</a></li>
      </ul>
    </nav>
  </div>
</header>
<div>
    <h1 class="bienvenida">Bienvenido  {{auth()->user()->nombreEmp}} {{auth()->user()->apellidoEmp}} </h>
</div>
<aside class="sidebar">
    <nav class="nav">
      <ul>
        <li class="barra-lateral"><a href="{{route('perfilusuario')}}"  class="lateral enlaces">Administrar Usuarios</a></li>
        <li class="barra-lateral"><a href="#"  class="lateral enlaces">Administrar Rol</a></li>
        <li class="barra-lateral"><a href="#" class="lateral enlaces">Administrar Accesos</a></li>
      </ul>
    </nav>
  </aside>
       
        <div class="tabla">    
            <table class="table-fill">
            <thead>
                <tr>
                    <th class="text-left">Titulo 1</th>
                    <th class="text-left">Titulo 2</th>
                    <th class="text-left">Titulo 3</th>
                    <th class="text-left">Titulo 4</th>
                    <th class="text-left">Titulo 5</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <tr>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                </tr>
                <tr>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                    <td class="text-left">Texto ejemplo</td>
                </tr>
                
            </tbody>
            </table>
        </div>

        <form id="regresar" action="{{route('logout')}}" method="POST" style="display:none;">
          @csrf
        </form>
    </body>
</html>