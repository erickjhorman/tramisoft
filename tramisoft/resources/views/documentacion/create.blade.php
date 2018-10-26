@extends('layouts.documentacion')

@section('title' , 'Registro documentacion')
@section('content')  <!-- Section y endsection son directivas para poner info del body de la pagina-->

 <!-- Barra de navegacion-->
<div class="container"> 
<nav class="navbar navbar fixed-top  navbar-light bg-primary " role="navigation">
 <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Documentacion
  </a>
  
       <ul class="navbar-nav">
        <span>Nombre:</span>
           @foreach($solicitantes as $sol)
              <li class="align-text-center" >{{$sol->nombre}}</li>
          @endforeach 
       </ul>
    
       <ul class="navbar-nav">
        <span class="Sapellido">Apellido:</span>
           @foreach($solicitantes as $sol)
              <li class="liApellido" >{{$sol->apellido}}</li>
          @endforeach 
       </ul>

       <ul class="navbar-nav">
        <span class="Snumero">Numero de identificacion:</span>
           @foreach($solicitantes as $sol)
              <li class="liNumero" >{{$sol->numeroIdentificacion}}</li>
          @endforeach 
       </ul>
   </div>
</nav>

</div>


<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>


@endsection