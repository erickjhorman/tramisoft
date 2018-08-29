
@extends('layouts.solicitante')

@section('title' , 'Registro solicitante')
@section('content')  <!-- Section y endsection son directivas para poner info del body de la pagina-->

   
 <form method="POST" action="/solicitante">
 	@csrf <!-- Directriz para proteger los formularios de falsificacion de registros-->
  <div class="form-row" >
     <div class="form-group col-md-6">
     <label for="tipoPersona">Tipo persona</label>
      <select name="tipopersona" id="TipoPersona" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="identificacion">Identificacion</label>
      <input type="text" class="form-control" name="identificacion" id="Identificacion" placeholder="identificacion">
    </div>

     <div class="form-group col-md-6">
     <label for="genero">Genero</label>
      <select id="Genero" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

      
   <div class="form-group col-md-6 ">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control"  name="nombre"id="Nombre" placeholder="Nombre">
  </div>

    <div class="form-group col-md-6">
      <label for="numero">Numero</label>
      <input type="text" class="form-control" name="numero" id="Numero" placeholder="Numero">
    </div>
 
  <div class="form-group col-md-6">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" name="apellido"id="Apellido" placeholder="Apellido">
  </div>
  <div class="form-group col-md-6">
    <label for="celular">Celular</label>
    <input type="text" class="form-control" name="celular" id="Celular" placeholder="Celular">
  </div>
 {{--  <div class="form-group col-md-6">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" name="telefono"id="Telefono" placeholder="Telefono">
  </div> --}}
  
  <div class="form-group col-md-6">
    <label for="correo">Correo</label>
    <input type="email" class="form-control" name="correo" id="Coreo" placeholder="Correo">
  </div>
  
  <div class="form-group col-md-6">
     <label for="nacionalidad">Nacionalidad</label>
      <select id="Nacionalidad" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group col-md-6">
     <label for="departamento">Departamento</label>
      <select id="Departamento" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group col-md-6">
     <label for="ciudad">Ciudad</label>
      <select id="Ciudad" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    {{-- <div class="form-group col-md-6">
     <label for="comuna">Comuna</label>
      <select id="Comuna" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

     <div class="form-group col-md-6">
     <label for="barrio">Barrio</label>
      <select id="Barrio" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

     <div class="form-group col-md-6">
     <label for="vivienda">Vivienda</label>
      <select id="Vivienda" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div> --}}

   

    {{-- <div class="form-group col-md-6">
     <label for="estrato">Estrato </label>
      <select id="Estrato" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
     <label for="estadoCivil">Estado civil</label>
      <select id="Estadocivil" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
     <label for="ocupacion">Ocupacion</label>
      <select id="Ocupacion" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
     <label for="eps">Eps</label>
      <select id="Eps" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div> --}}
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
 	
 


@endsection
