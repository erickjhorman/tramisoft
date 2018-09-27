@extends('layouts.tramite')

@section('title' , 'Registro tramite')
@section('content')  <!-- Section y endsection son directivas para poner info del body de la pagina-->


   <!-- NavBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--End NavBar-->


<!--Carousel-->
<div class="main">
    <div class="container">
   <div class="col-md-12"> 
   
    <div id="carousel_1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel_1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel_1" data-slide-to="1"></li>
    <li data-target="#carousel_1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner "  role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('/img/index/index.png') }}" alt="First slide">
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100" src="{{asset('/img/index/2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  src="{{asset('/img/index/index3.png') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel_1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel_1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div> <!--End container-->
</div>

<!--<a class="btn btn-primary"><iframe id="iframeTramite" src="/tramite/create" width="100%" height="600"></iframe>Enviar</a>-->
<button id="MostrarModalTramite" type="button" class="btn btn-outline-primary">Primary</button>
      

<!--<button id="MostrarModalTramite" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#Tramite_modal">Primary</button>-->      
 


 
@endsection