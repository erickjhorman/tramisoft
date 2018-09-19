alert("Mi java")
function validar(){
	var persona, identificacion, numero, genero, nombre, apellido, celular, telefono,
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
nacionalidad = document.getElementById("Naci").value;
departamento = document.getElementById("Departamento").value;
ciudad = document.getElementById("idCiudad").value;



if (persona === "" || identificacion === "" || numero === "" || genero === "" ||
nombre === "" || apellido === "" || celular === "" || telefono === "" || correo === "" ||
nacionalidad === "" || departamento === "" ||  departamento === "ciudad" ) {
	alert("Todos los campos son obligatorios ");
	return false;  // False no deja que se envie el formulario
}

// if (nombre === "") {
// 	alert("Todos los campos son obligatorios ");
// 	return false;  // False no deja que se envie el formulario
// }

}

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
