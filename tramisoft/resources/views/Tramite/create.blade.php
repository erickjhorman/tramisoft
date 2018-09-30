@extends('layouts.tramite')

@section('title' , 'Registro Tramite')
@section('content')  <!-- Section y endsection son directivas para poner info del body de la pagina-->
 

<div class="container"> 
<nav class="navbar navbar fixed-top  navbar-light bg-primary " role="navigation">
 <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
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

 <form role="form" name="form2" method="POST" action="/tramite">
  	@csrf 
  @include('Tramite.modal_tramite')
  </form>

@endsection
