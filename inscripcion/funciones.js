//Funciones para la seccion medica
function mostrarAlergia(){
    document.getElementById("ocultoAlergia").style.display = "block";
}
function mostrarMedicamentos(){
  document.getElementById("ocultoMedicamentos").style.display = "block";
}
function mostrarOtrasEnfermedades(){
  document.getElementById("ocultoOtrasEnfermedades").style.display = "block";
}
function ocultarAlergia(){
    document.getElementById("ocultoAlergia").style.display = "none";
}
function ocultarMedicamentos(){
  document.getElementById("ocultoMedicamentos").style.display = "none";
}
function ocultarOtrasEnfermdedades(){
  document.getElementById("ocultoOtrasEnfermedades").style.display = "none";
}
//Funcion para dias especificos de inscripcion
function otrosDias(sel) {
      if (sel.value=="otroDia"){
        divD = document.getElementById("desdeDias");
        divD.style.display = "";
        divH = document.getElementById("hastaDias");
        divH.style.display = "";
      } else if (sel.value != "otroDia") {
        divD = document.getElementById("desdeDias");
        divD.style.display = "none";
        divH = document.getElementById("hastaDias");
        divH.style.display = "none";
      }
}
//funcion para otras escuelas
function otraEscuela(sel) {
      if (sel.value=="otra"){
        divE = document.getElementById("inputEscuela");
        divE.style.display = "";
      } else if (sel.value!="otra") {
        divE = document.getElementById("inputEscuela");
        divE.style.display = "none";
      }
}
//funcion de menu desplegable combobox
$(document).ready(function(){
  $('select.form-control').combobox();
  $('#it').click(function(e){
    $('ul.dropdown-menu').toggle();
  });
});

// FUNCION IMAGEN 
function validarExt()
{
  var archivoInput = document.getElementById('archivoInput');
  var archivoRuta = archivoInput.value;
  var extPermitidas = /(.jpg|jpeg|PNG)$/i;
  if(!extPermitidas.exec(archivoRuta)){
      alert('Asegurese de haber seleccionado una imagen jpg, jpeg o png');
      archivoInput.value = '';
      return false;
  }
  else
  {
      if (archivoInput.files && archivoInput.files[0])
      {
          var visor = new FileReader();
          visor.onload = function(e)
          {
              document.getElementById('visorArchivo').innerHTML =
              '<embed src="'+e.target.result+'" width="500" height="375" />';
          };
          visor.readAsDataURL(archivoInput.files[0]);
      }
  }
}
