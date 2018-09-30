<div>
<div class="row">
    <div class="col">
       <label for="nombre" class="lbnombre">Nombre</label>	
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="col">
      <label for="apellido" class="lblapellido">Apellido</label>	
      <input type="text" class="form-control" placeholder="Apellido">
    </div>
  </div>
  <div class="row">
    <div class="col">
    	<label for="identificacion" class="lblidentificacion">Numero de identificacion</label>
      <input type="text" class="form-control" placeholder="Numero de identificacion"> 
    </div>

  </div>
  <div class="row">
    

      <div class="row">
     <label for="tipoTramite" class="lbTramite"> Tipo tramite</label>
      <select class="form-control" name="tipoTramite" id="tramite" required>
        <option value="" >--Selecione un tipo de tramite--</option>        
               @foreach($Tramite as $tra)
                <option value="{{$tra->id}}">{{$tra->nombre}}</option>
                   
                @endforeach
      </select>
      <div id="mostrarPersona" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
     </div>
      </div>
     
     </div>
     <div class="row">
    <div class="col">
    	<label for="respuesta" class="lbrespuesta">Medio de respuesta</label>
    <select class="form-control" name="respuesta" id="respuesta" required>
    	 <option value="" >--Selecione un medio de respuesta--</option>  
    	  </select> <!-- identificacion es el nombre del select-->
    </div>
    </div>

    <div class="row">
    	<label for="respuesta" class="lbObservaciones">Observaciones</label>
    	<textarea>
    		
    	</textarea>
    </div>

    <button  type="submit" class="btn btn-outline-primary">Siguiente</button>
</div>