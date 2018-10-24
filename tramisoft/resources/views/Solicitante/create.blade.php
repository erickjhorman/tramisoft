
@extends('layouts.solicitante')

@section('title' , 'Registro solicitante')
@section('content')  <!-- Section y endsection son directivas para poner info del body de la pagina-->

 <!-- Barra de navegacion-->
<div class="container"> 
<nav class="navbar navbar fixed-top  navbar-light bg-primary " role="navigation">
 <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
  
    
   </div>
</nav>

</div>  


 <form name="form1" method="POST" action="/solicitante">
  @csrf 
  <div class="form-row">
     <div class="form-group col-md-6">
     <label for="tipoPersona" class="lblpersona"> Tipo persona</label>
      <select class="form-control" name="tipoPersona" id="persona" required>
        <option value="" >--Selecione un tipo de persona--</option>        
               @foreach($tipopersona as $per)
                <option value="{{$per->id}}">{{$per->nombre}}</option>
                   
                @endforeach
      </select>
      <div id="mostrarPersona" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
     </div>
      </div>
  
 
    <div class="form-group col-md-6">
      <label for="identificacion" class="lblide">Tipo de dentificacion</label>
     <select class="form-control" name="identificacion" id="identificacion" required>
      <option value="" >--Selecione un tipo de identificacion--</option>  
                @foreach($identificacion as $id)
                <option  value="{{$id->id}}">{{$id->tipoIdentificacion}}</option>
                
                @endforeach
      </select> <!-- identificacion es el nombre del select-->
      <div id="mostrarIdentificacion" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
     </div>
    </div>


      <div class="form-group col-md-6">
      <label for="numero" class="lbnumero" >Numero</label>
        <input type="text" class="form-control" id="numero" placeholder="Ingrese el numero" name="numero"  required="">
        <div id="mostrarNumero" class="texto">
       <p>Este campo es obligatorio</p>
        </div>
      </div>
   

     <div class="form-group col-md-6">
     <label for="genero"  class="lbgenero">Genero</label>
       <select class="form-control" name="genero"  id="genero" required>
        <option value="o" disabled="true" selected="true">Selecione un tipo de genero</option>  
                @foreach($genero as $gen)
                
              <option  value="{{$gen->id}}">{{$gen->tipoGenero}}</option>
                @endforeach
      </select> <!-- identificacion es el nombre del select--> <!-- genero es el nombre del select-->
      <div id="mostrarGenero" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
        </div>
    </div>
 
    
   <div class="form-group col-md-6 ">
    <label for="nombre" class="lbnombre">Nombre</label>
   <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" required>
   <div id="mostrarNombre" class="texto">
  <p>Este campo es obligatorio</p>
   </div>
   
  </div>

  <div class="form-group col-md-6">
    <label for="apellido" class="lbapellido">Apellido</label>
   <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido"  required>
   <div id="mostrarApellido" class="texto">
       <p>Este campo es obligatorio</p>
        </div>
  </div>
  
  <div class="form-group col-md-6">
    <label for="celular" class="lbcelular">Celular</label>
   <input type="text" class="form-control" id="celular" placeholder="Nº de celular" name="celular" required>
   <div id="mostrarCelular" class="texto">
  <p>Este campo es obligatorio</p>
</div>
  </div>


  <div class="form-group col-md-6">
    <label for="telefono" class="lbtelefono">Telefono</label>
   <input type="text" class="form-control" id="telefono" placeholder="telefono" name="telefono">
   <div id="mostrarTelefono" class="texto">
  <p>Este campo es obligatorio</p>
</div>
  </div>
  


   <div class="form-group col-md-6">
    <label for="correo" class="lbcorreo">Correo</label>
    <input type="email" class="form-control" name="correo" id="Correo" placeholder="Correo" required>
     <div id="mostrarCorreo" class="texto">
  <p>Este campo es obligatorio</p>
</div>
  </div>
 

   <div class="form-group col-md-6">
     <label for="nacionalidad" class="lbnacio">Nacionalidad</label>
        <select class="form-control" name="nacionalidades" id="Naci" required="" >
              <option value="" >--Selecione una pais--</option> 
                @foreach($Nacionalidades as $na)
                <option  value="{{$na->id}}">{{$na->nombre}}</option>
               @endforeach
                
        </select>
         <div id="mostrarNaci" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
        </div>
          <!-- nacionalidad es el nombre del select-->
    </div>

  

     <div class="form-group col-md-6">
     <label for="nacionalidad" class="lbdepartamento">Departamento</label>
     
            <select class="form-control" name="departamento" id="Departamento" required>
              <option value="">-- Selecione un departamento --</option>  
                
            </select>
            <div id="mostrarDepartamento" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
        </div>
          
     </div>


    <div class="form-group col-md-6">
     <label for="ciudad" class="lbciudad">Ciudad</label>
     <select class="form-control" name="ciudad" id="idCiudad" required>
              <option value="" >--Selecione una ciudad --</option>  
      </select>
         <div id="mostrarCiudad" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
        </div>
          
    </div>

     <div class="form-group col-md-6 ">
    <label for="nombre" class="lbnombre">Usuario</label>
   <input type="text" class="form-control" id="nombre" placeholder="usuario" name="usuario" required>
   <div id="" class="texto">
  <p>Este campo es obligatorio</p>
   </div>
   
  </div>

  <div class="form-group col-md-6 ">
    <label for="contraseña" class="lbcontraseña">Contraseña</label>
   <input type="text" class="form-control" id="contraseña" placeholder="contraseña" name="contraseña" required>
   <div id="" class="texto">
  <p>Este campo es obligatorio</p>
   </div>
   
  </div>



    {{--<div class="form-group col-md-6">
     <label for="comuna">Comuna</label>
      <select class="form-control">
                @foreach($comunas as $com)
                <option>{{$com->nombre}}</option>
                @endforeach
            </select>
    </div>

     <div class="form-group col-md-6">
     <label for="barrio">Barrio</label>
      {!! Form::select('barrio') !!} <!-- barrio es el nombre del select-->
    </div>

     <div class="form-group col-md-6">
     <label for="vivienda">Vivienda</label>
      <select class="form-control">
                @foreach($viviendas as $vi)
                <option>{{$vi->nombre}}</option>
                @endforeach
      </select>
    </div>

   

    <div class="form-group col-md-6">
     <label for="estrato">Estrato </label>
     <select class="form-control">
                @foreach($estratos as $est)
                <option>{{$est->nivel}}</option>
                @endforeach
     </select>
    </div>
    <div class="form-group col-md-6">
     <label for="estadoCivil">Estado civil</label>
     <select class="form-control">
                @foreach($estadoCivil as $civi)
                <option>{{$civi->nombre}}</option>
                @endforeach
     </select>
    </div>
    <div class="form-group col-md-6">
     <label for="ocupacion">Ocupacion</label>
      <select class="form-control">
                @foreach($ocupacion as $ocu)
                <option>{{$ocu->nombre}}</option>
                @endforeach
     </select> <!-- ocupacion es el nombre del select-->
    </div>
    
    <div class="form-group col-md-6">
     <label for="eps">Eps</label>
     <select class="form-control">
                @foreach($eps as $ep)
                <option>{{$ep->nombre}}</option>
                @endforeach
     </select>
    </div> --}}
    </div>
   <button type="submit" onclick=" return validar()" class="btn btn-primary">Enviar</button>
  
  
</form>  
@endsection
