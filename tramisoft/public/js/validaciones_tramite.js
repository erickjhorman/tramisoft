alert("Aqui");
function validar(){
alert("Aqui");	var tramite, medioRespuesta;  // se cran variables para guardar informacion de los inputs y la expresiones regulares 

// Variable para guardar por id
tramite =  document.getElementById("tramite").selectedIndex;
medioRespuesta = document.getElementById("medioRes").selectedIndex;

expresion = /\w+@\w+\.+[a-z]/; //Esto represeta la extructura de un correo 

if(tramite == null || tramite == 0){
    alert("Debe seleccionar combo box naci" );
	mostrarTooltipTramite();
	return false;
}


}


//To show the Tolltips//
function mostrarTooltipTramite(){
 console.log("Erick" + nombre);
  alert("Erick" + apellido);
 document.getElementById("mostrarTramite").style.display = "block"; 
 
}