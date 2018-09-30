<div>
<div class="row">
   <div class="col">
       @foreach($solicitantes as $sol)
                
     <input type="hidden" placeholder="Nombre" name="id" value="{{$sol->id}}"  style="display:none">    
      @endforeach
    </div>
    <div class="col">
       <label for="nombre" class="lbnombre">Nombre</label>	
      
       @foreach($solicitantes as $sol)
                
     <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{$sol->nombre}}">      
                @endforeach
    </div>
    <div class="col">
      <label for="apellido" class="lblapellido">Apellido</label>	
       @foreach($solicitantes as $sol)
                
     <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="{{$sol->apellido}}">      
                @endforeach
      
    </div>
  </div>
  <div class="row">
    <div class="col">
    	<label for="identificacion" class="lblidentificacion">Numero de identificacion</label>
       @foreach($solicitantes as $sol)
                
    <input type="text" class="form-control" placeholder="Numero de identificacion" name="identificacion" value="{{$sol->numeroIdentificacion}}">      
                @endforeach

      
    </div>

  </div>
  
    

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
     
     
    <div class="row">
     <label for="medioRespuesta" class="lbRespuesta"> Medio de respuesta</label>
      <select class="form-control" name="medioRespuesta" id="medioRes" required>
        <option value="" >--Selecione un medio de respuesta--</option>        
               @foreach($medioRespuestas as $med)
                <option value="{{$med->id}}">{{$med->nombre}}</option>
                   
                @endforeach
      </select>
      <div id="mostrarPersona" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
     </div>
      </div>

    <div class="row">
    	<label for="respuesta" class="lbObservaciones" name="observaciones">Observaciones</label>
    	<textarea>
    		
    	</textarea>
    </div>

    <button  type="submit" class="btn btn-outline-primary">Siguiente</button>
</div>