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
    

    <div class="col">
    	<label for="tramite" class="lbltramite">Tramite</label>
    <select class="form-control" name="tramite" id="tramite" required>
    	 <option value="" >--Selecione un tipo de tramite--</option>  
    	  </select> <!-- identificacion es el nombre del select-->
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