/** Filtrar catalogo Tipo tramite */
$('#tramite').on('change',function(e){

console.log(e);
console.log("Estoy aqui");
var idTramite = e.target.value;
console.log(idTramite);

$.get('/json-tipoTramite?idTramite='+ idTramite, function(data){
console.log("Informacion catalogo tramite"+ data);
console.log("Estoy aqui a" + idTramite);

$('#Departamento').empty();
$('#Departamento').append('<option value="o" disabled="true" selected="true">Selecione una ciudad</option>');
$.each(data, function(index, departamentosObj) {
  $('#Departamento').append('<option value="' + departamentosObj.id +'">' + departamentosObj.nombre + '</option>');

    });
 
});
	

});


/** Filtrar catalogo medio de respuesta */
$('#medioRes').on('change',function(e){

console.log(e);
console.log("Estoy aqui");
var idMedioRespuesta = e.target.value;
console.log(idMedioRespuesta);

$.get('/json-medioRespuesta?idMedioRespuesta='+ idMedioRespuesta, function(data){
console.log("Informacion catalogo nacionalidades"+ data);
console.log("Estoy aqui a" + idMedioRespuesta);

$('#Departamento').empty();
$('#Departamento').append('<option value="o" disabled="true" selected="true">Selecione una ciudad</option>');
$.each(data, function(index, departamentosObj) {
  $('#Departamento').append('<option value="' + departamentosObj.id +'">' + departamentosObj.nombre + '</option>');

    });
 
});
	

});



