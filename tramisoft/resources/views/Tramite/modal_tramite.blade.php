     <!-- Image and text -->


<div class="form-group">
       @foreach($solicitantes as $sol)
                
     <input type="hidden" placeholder="Nombre" name="id" value="{{$sol->id}}"  style="display:none">    
      @endforeach
    </div>
     {{--  <div class="form-group">
       <label for="nombre" class="lbnombre">Nombre</label>	
      
       @foreach($solicitantes as $sol)
                
     <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{$sol->nombre}}">      
                @endforeach
    </div>
     <div class="form-group">
      <label for="apellido" class="lblapellido">Apellido</label>	
       @foreach($solicitantes as $sol)
                
     <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="{{$sol->apellido}}">      
                @endforeach
      
    </div>
  
  
      <div class="form-group">
    	<label for="identificacion" class="lblidentificacion">Numero de identificacion</label>
       @foreach($solicitantes as $sol)
                
    <input type="text" class="form-control" placeholder="Numero de identificacion" name="identificacion" value="{{$sol->numeroIdentificacion}}">      
                @endforeach

      
    </div> --}}

<div class="form-group">
     <label for="tipoTramite" class="lbTramite"> Tipo tramite</label>
      <select class="form-control" name="tipoTramite" id="tramite" required>
        <option value="" >--Selecione un tipo de tramite--</option>        
               @foreach($Tramite as $tra)
                <option value="{{$tra->id}}">{{$tra->nombre}}</option>
                   
                @endforeach
      </select>
     
    </div>
      <div id="mostrarTramite" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
     </div>

     
     
    <div class="form-group">
     <label for="medioRespuesta" class="lbRespuesta"> Medio de respuesta</label>
      <select class="form-control" name="medioRespuesta" id="medioRes" required>
        <option value="" >--Selecione un medio de respuesta--</option>        
               @foreach($medioRespuestas as $med)
                <option value="{{$med->id}}">{{$med->nombre}}</option>
                   
                @endforeach
      </select>
     </div>
      <div id="mostrarRespuesta" class="texto">
       <p>Debe seleccionar un archivo de la lista</p>
     </div>

   <div class="form-group">
    	<label for="respuesta" class="lbObservaciones" name="observaciones">Observaciones</label>
    	<textarea class="form-control" rows="3"></textarea>
    </div>

    <button  type="submit" onclick=" return validar()" class="btn btn-outline-primary">Siguiente</button>

    