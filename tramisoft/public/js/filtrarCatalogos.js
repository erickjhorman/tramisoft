/** Filtrar catalogo departamento */
$('#Naci').on('change',function(e){

console.log(e);
console.log("Estoy aqui");
var idNacionalidad = e.target.value;
console.log(idNacionalidad);

$.get('/json-departamentos?idNacionalidad='+ idNacionalidad, function(data){
console.log("Informacion catalogo nacionalidades"+ data);
console.log("Estoy aqui a" + idNacionalidad);

$('#Departamento').empty();
$('#Departamento').append('<option value="o" disabled="true" selected="true">Selecione una ciudad</option>');
$.each(data, function(index, departamentosObj) {
  $('#Departamento').append('<option value="' + departamentosObj.id +'">' + departamentosObj.nombre + '</option>');

    });
 
});
	

});

/** Filtrar catalogo ciudad */
$('#Departamento').on('change',function(e){

console.log(e);
console.log("Estoy aqui");
var idDepartamento = e.target.value;
console.log(idDepartamento);

$.get('/json-ciudad?idDepartamento='+ idDepartamento, function(data){
console.log("Informacion catalogo departamentos"+ data);
console.log("Estoy aqui B" + idDepartamento);

$('#idCiudad').empty();
$('#idCiudad').append();
$.each(data, function(index, ciudadsObj) {
  $('#idCiudad').append('<option value="' + ciudadsObj.id +'">' + ciudadsObj.nombre + '</option>');

});

});
	

});