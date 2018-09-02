$('#Naci').on('change',function(e){

console.log(e);
console.log("Estoy aqui");
var idNacionalidad = e.target.value;
console.log(idNacionalidad);

$.get('/json-departamentos?idNacionalidad='+ idNacionalidad, function(data){
console.log("Informacion"+ data);
console.log("Estoy aqui b" + idNacionalidad);

$('#Departamento').empty();
$('#Departamento').append();
$.each(data, function(index, departamentosObj) {
  $('#Departamento').append('<option value="' + departamentosObj.id +'">' + departamentosObj.nombre + '</option>');

});

});
	

});