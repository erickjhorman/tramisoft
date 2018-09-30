@extends('layouts.tramite')

@section('title' , 'Registro Tramite')
@section('content')  <!-- Section y endsection son directivas para poner info del body de la pagina-->
  <form name="form2" method="POST" action="/tramite">
  	@csrf 
  @include('Tramite.modal_tramite')
  </form>

@endsection
