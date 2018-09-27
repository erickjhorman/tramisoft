alert("Aqui");
function validar(){
alert("Aqui");	var persona, identificacion, numero, genero, nombre, apellido, celular, telefono,
	correo, nacionalidad, departamento, ciudad, expresion   // se cran variables para guardar informacion de los inputs y la expresiones regulares 

// Variable para guardar por id
persona = document.getElementById("persona").value;
identificacion = document.getElementById("identificacion").value;
numero = document.getElementById("numero").value;
genero = document.getElementById("genero").value;
nombre = document.getElementById("nombre").value;
apellido = document.getElementById("apellido").value;
celular = document.getElementById("celular").value;
telefono = document.getElementById("telefono").value;
correo = document.getElementById("Correo").value;
nacionalidad = document.getElementById("Naci").selectedIndex;
departamento = document.getElementById("Departamento").selectedIndex;
ciudad = document.getElementById("idCiudad").selectedIndex;


expresion = /\w+@\w+\.+[a-z]/; //Esto represeta la extructura de un correo 

if (nombre === "" || nombre.length>30 ||  /^\s+$/.test(nombre)){
  alert("Aqui estoy");
 mostrarTooltipNombre();
  return false;
 }

else if (apellido === "" || apellido.length>30 ||  /^\s+$/.test(apellido)){
  alert("Aqui estoy 2");
  
  mostrarTooltipApellido();
  return false;
 }

else if (celular === "" || celular.length>13 || isNaN(celular)){
  alert("Aqui estoy 3");
  mostrarTooltip('celular');
  return false;
 }

else if (telefono === "" || telefono.length>10 || isNaN(telefono)){
  alert("Aqui estoy");
  mostrarTooltip('telefono');
  return false;
 }


else if (correo === "" || correo.length>30 || !expresion.test(correo)){
  alert("Aqui estoy");
  mostrarTooltip('correo');
  return false;
}  else if(persona == null || Naci == 0){
    mostrarTooltip('persona');
	return false;
}

else if(identificacion == null || identificacion == 0){
    alert("Debe seleccionar combo box naci" );
	mostrarTooltip('identificacion');
	return false;
}

else if(genero == null || genero == 0){
    alert("Debe seleccionar combo box naci" );
	mostrarTooltip('genero');
	return false;
}  else if(nacionalidad == null || nacionalidad == 0){
    alert("Debe seleccionar combo box naci" );
	 mostrarTooltip('nacionalidad');
	return false;
} else if(departamento == null || departamento == 0){
    mostrarTooltip('departamento');
	return false;
} else if(ciudad == null || ciudad == 0) {
    alert("Debe seleccionar combo box naci" );
	 mostrarTooltip('ciudad');
	return false;
}

}




// else if(Departamento == null || Departamento == 0){
//     alert("Debe ingresar numeros" );
// 	return false;
// }


// else if(idCiudad == null || idCiudad == 0){
//     alert("Debe ingresar numeros" );
// 	return false;
// }
 
// if (nombre === "") {
// 	alert("Todos los campos son obligatorios ");
// 	return false;  // False no deja que se envie el formulario
// }


// //Validad con el formulario
// alert("Mi java")
// function validar(){
	
// 	var formulario = document.form1;

// // if (persona === "" || identificacion === "" || numero === "" || genero === "" ||
// // nombre === "" || apellido === "" || celular === "" || telefono === "" || correo === "" ||
// // nacionalidad === "" || departamento === "" ||  departamento === "ciudad" ) {
// // 	alert("Todos los campos son obligatorios ");
// // 	return false;  // False no deja que se envie el formulario
// // }

// if (formulario.nombre.value === "" ) {
// 	alert("Todos los campos son obligatorios");
// 	console.log("snjaks");
// 	return false;  // False no deja que se envie el formulario
// }

// formulario.submit();
// }

//To show the Tolltips//

function mostrarTooltipNombre(){
 console.log("Erick" + nombre);
  alert("Erick" + apellido);
 document.getElementById("mostrarNombre").style.display = "block"; 
 
}

function mostrarTooltipApellido(){
   document.getElementById("mostrarApellido").style.display = "block";
}
   
 // }  else if (mensaje == celular) {

//      document.getElementById("mostrarCelular").style.display = "block";
//  }  else if (mensaje == telefono) {
//      document.getElementById("mostrarTelefono").style.display = "block";

// }  else if (mensaje == correo) {
//      document.getElementById("mostrarCorreo").style.display = "block";

// }  else if (mensaje == persona) {
//      document.getElementById("mostrarPersona").style.display = "block";
// }  else if (mensaje == identificacion) {
//      document.getElementById("mostrarIdentificacion").style.display = "block";

// }   else if (mensaje == genero) {
//      document.getElementById("mostrarGenero").style.display = "block";
 
//  }    else if (mensaje == nacionalidad) {
//      document.getElementById("mostrarNaci").style.display = "block";

// } else if (mensaje == departamento) {
//      document.getElementById("mostrarDepartamento").style.display = "block";
 
// } else if (mensaje == ciudad) {
//      document.getElementById("mostrarCiudad").style.display = "block";

// }












