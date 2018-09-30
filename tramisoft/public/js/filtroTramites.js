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



('/json-tipoTramite','TramitesControlador@getTramite');
