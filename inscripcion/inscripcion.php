<?php
	require_once('parciales/inicio_cabecera.php');
	require_once('parciales/navbar.php');
?>

<section class="inscripcion">
    <form class="" action="index.html" method="post">

			<!--Primera Seccion: Primeros en cabezados / Socio / Reutilizar codigo-->
			<div class="container1">
				<div class="col-md-6">
					<h2>Datos del colono 2018/2019</h2>
				</div>
				<div class="form-group row">
					<div class="col-md-4">
						<label class="socioL">Socio</label>
						<input type="radio" name="socio" value="" id="inputSocioSi">
						<label for="inputSocioSi" class="socio">Si</label>
						<input type="radio" name="socio" value="" id="inputSocioNo">
						<label for="inputSocioNo" class="socio">No</label>
					</div>
					<div class="col-md-8">
						<label class="socioL">Reutilizar sus datos ingresados?</label>
						<input type="radio" name="Rdatos" value="" id="inputRdatosSi">
						<label for="inputRdatosSi" class="socio">Si</label>
						<input type="radio" name="Rdatos" value="" id="inputRdatosNo">
						<label for="inputRdatosNo" class="socio">No</label>
					</div>
				</div>
		  </div>
			<hr>
			<!--Segunda seccion: Imagen / Nombre_Apellido / Nacimiento, Edad / DNI, Domicilio / Email, Localidad / Telefonos, TE familiares / Escuela, Opciones de escuelas /-->
			<!--Segunda seccion(tutores): ApellidoTutor,NombreTutor / DNITutor,Parentesco / Peridodo de inscripcion-->
			<div class="container2">
      		<!--Imagen-->
					<div class="form-group row">
						<section class="col-md-6" id="imagen">
							<div class="custom-file">
  							<input type="file" class="custom-file-input col-md-offset-4 col-md-4" id="archivoInput" lang="es" onchange="return validarExt()">
  							<label class="custom-file-label" for="archivoInput">Seleccionar Archivo</label>
							</div>
							<br><br>
							<div id="visorArchivo">
								<!--Aca se previsualiza la imagen (solo le permití archivos jpg, jpeg y png)-->
							</div>
						</section>
					</div>
					<!--Nombre / Apellido-->
					<div class="form-group row">
						<div class="col-md-6">
							<label for="inputNombre" class="">Nombre</label>
							<input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
						</div>
						<div class="col-md-6">
							<label for="inputApellido" class="">Apellido</label>
							<input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
						</div>
					</div>
					<!--Nacimiento / Edad-->
					<div class="form-group row">
						<div class="col-md-6">
							<label for="inputNacimiento" class="">Fecha de Nacimiento</label>
							<input type="date" class="form-control" id="inputNacimiento" placeholder="DD/MM/AA">
						</div>
						<div class="col-md-6">
			    		<label for="inputEdad" class="">Edad</label>
							<input type="number" class="form-control" id="inputEdad" placeholder="Edad">
						</div>
					</div>
					<!--DNI / Domicilio-->
					<div class="form-group row">
						<!--DNI-->
						<div class="col-md-6">
							<label for="inputDocumento" class="">DNI N°</label>
							<input type="number" class="form-control" id="inputDocumento" placeholder="Documento">
						</div>
						<!--Domicilio-->
						<div class="col-md-6">
							<label for="inputDomicilio" class="">Domicilio</label>
							<input type="text" class="form-control" id="inputDomicilio" placeholder="Domicilio">
						</div>
					</div>
					<!--Email / Localidad-->
					<div class="form-group row">
						<div class="col-md-6">
							<!--Email-->
			    		<label for="inputEmail" class="">Email</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Email">
						</div>
						<!--Localidad-->
						<div class="col-md-6">
							<label for="inputLocalidad" class="">Localidad</label>
							<input type="text" class="form-control" id="inputLocalidad" placeholder="Localidad">
						</div>
					</div>
					<!--Telefonos / TE familiares-->
					<div class="form-group row">
						<!--Telefonos-->
						<div class="col-md-6">
			    		<label for="inputTelefonos" class="">Telefonos</label>
							<input type="number" class="form-control" id="inputTelefonos" placeholder="Telefonos">
						</div>
						<!--Telefonos de familiares-->
						<div class="col-md-6">
							<label for="inputFamiliares" class="">Telefonos de familiares</label>
							<input type="number" class="form-control" id="inputFamiliares" placeholder="T.E. de familiares">
						</div>
					</div>
					<!--Escuela-->
					<div class="form-group row">
						<div class="col-md-3">
							<label for="inputEscuela" class="">Escuela a la que concurre</label>
						</div>
					</div>
					<!--Opciones de escuelas-->
					<div class="form-group row">
						<div class="col-md-5">
							<SELECT id="escuelas" class="form-control" name="escuelas" onChange="otraEscuela(this)" for="inputEscuela">
								<option value="">--Seleccione una escuela--</option>
								<option value="">Lincoln</option>
								<option value="">Estrella de Belen</option>
								<option value="">Nueva Era</option>
								<option value="">Mariano Moreno</option>
								<option value="">San Pablo</option>
								<option value="">Calasan</option>
								<option value="">Roca</option>
								<option value="">San Fernando</option>
								<option value="otra">--Otra escuela--</option>
							</SELECT>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control" id="inputEscuela" placeholder="Nombre de Escuela" style="display:none">
						</div>
					</div>
					<hr>
					<h2>Datos de los padres y/o adultos que lo retirarán de la colonia</h2>
					<!--ApellidoTutor / NombreTutor-->
					<div class="form-group row">
						<!--ApellidoTutor-->
						<div class="col-md-6">
							<label for="inputApellidoTutor" class="">Apellido</label>
							<input type="text" class="form-control" id="inputApellidoTutor" placeholder="Apellido del tutor">
						</div>
						<!--NombreTutor-->
						<div class="col-md-6">
							<label for="inputNombreTutor" class="">Nombre</label>
							<input type="text" class="form-control" id="inputNombreTutor" placeholder="Nombre del tutor">
						</div>
					</div>
					<!--DNITutor / Parentesco-->
					<div class="form-group row">
						<!--DNITutor-->
						<div class="col-md-6">
							<label for="inputDNITutor" class="">DNI (de la persona autorizada a retirar al colono)</label>
							<input type="number" class="form-control" id="inputDNITutor" placeholder="DNI">
						</div>
						<!--Parentesco-->
						<div class="col-md-6">
							<label for="inputParentesco" class="">Parentesco</label>
							<input type="text" class="form-control" id="inputParentesco" placeholder="Parentesco">
						</div>
					</div>
					<!--Periodo de inscripcion-->
					<h3>Periodo de inscripcion</h3>
					<div class="form-group row">
				  	<div class="col-md-6">
							<label>Elija una opción</label>
							<SELECT class="form-control" NAME="pago" onChange="otrosDias(this)">
                	<OPTION VALUE="">--Seleccione una opción--</OPTION>
									<option value="">Diciembre (2da quincena)</option>
			        		<option value="">Enero (1ra quincena)</option>
			        		<option value="">Enero (2da quincena)</option>
									<option value="">Enero (completo)</option>
									<option value="">Febrero (1ra quincena)</option>
									<option value="">Temporada completa (Diciembre - Febrero)</option>
                  <OPTION VALUE="otroDia">--O seleccione días específicos--</OPTION>
               </SELECT>
	    			</div>
						<div class="col-md-3" id="desdeDias" style="display:none">
							<label>Desde que dia</label>
							<input type="date" class="form-control">
						</div>
						<div class="col-md-3" id="hastaDias" style="display:none">
							<label>Hasta que dia</label>
							<input type="date" class="form-control">
						</div>
					</div>
 			</div>
			<hr>
			<!--Tercera seccion: Constancia de salud e informe-->
			<div class="container3">
				<h3>Informe de Salud</h3>
					<p>Dejo constancia que mi hijo/a, goza de buena salud, autorizándolo a realizar todas las actividades deportivas y recreativas que brinda la Colonia de Vacaciones.</p>
					<p>Además, me comprometo a informar, inmediatamente, a las autoridades de la Colonia cualquier cambio en la salud de mi hijo que le impida la realización de actividades deportivas y recreativas.</p>
					<p><label>Nota:</label> cada padre será responsable de la veracidad de la información</p>
			</div>
			<hr>
			<!--Cuarta seccion(Datos medicos del colono): Alergia / Medicamentos / Padecimientos / botonInscripcion-->
			<div class="container4">
				<p>Informe aquí los datos que considere deba conocer el personal docente y medico:</p>
					<ul class="list-unstyled">
						<!--Alergia-->
						<li><label>Es alérgico? </label>
							<div class="form-group row">
								<div class="col-md-3">
										<input type="radio" value="mostrar" onclick="mostrarAlergia()" name="alergia" id="inputAlergiaSi">
										<label for="inputAlergiaSi" class="socio">Si</label>
										<input type="radio" value="ocultar" onclick="ocultarAlergia()" name="alergia" value="" id="inputAlergiaNo">
										<label for="inputAlergiaNo" class="socio">No</label>
								</div>
								<div class="col-md-3" id="ocultoAlergia" style="display:none">
										<input type="text" class="form-control" name="alergia" id="alergia" placeholder="A que?">
								</div>
							</div>
						</li>
						<!--Medicamentos-->
						<li><label>Toma medicamentos? </label>
							<div class="form-group row">
								<div class="col-md-3">
										<input type="radio" value="mostrar" onclick="mostrarMedicamentos()" name="medicamentos" id="inputMedicamentosSi">
										<label for="inputMedicamentosSi" class="socio">Si</label>
										<input type="radio" value="ocultar" onclick="ocultarMedicamentos()" name="medicamentos" id="inputMedicamentosNo">
										<label for="inputMedicamentosNo" class="socio">No</label>
								</div>
								<div class="col-md-3" id="ocultoMedicamentos" style="display:none">
										<input type="text" class="form-control" name="medicamento" id="medicamento" placeholder="Cuál?">
  									<input type="text" class="form-control" name="h_medicamento" id="h_medicamento" placeholder="Horarios del medicamento">
								</div>
							</div>
						</li>
						<!--Padecimientos: Epilepcia / Asma / Afecciones cardíacas / Otras enfermades-->
						<li><label>Padeció o padece:</label>
							<div class="form-group row">
								<div class="col-md-4">
									<label for="epilepcia">Epilepcia</label>
											<input type="radio" name="epilepcia" value="" id="inputEpilepsiaSi">
											<label for="inputEpilepsiaSi" class="socio">Si</label>
											<input type="radio" name="epilepcia" value="" id="inputEpilepsiaNo">
											<label for="inputEpilepsiaNo" class="socio">No</label>
								</div>
								<div class="col-md-4">
									<label for="asma">Asma</label>
											<input type="radio" name="asma" value="" id="inputAsmaSi">
											<label for="inputAsmaSi" class="socio">Si</label>
											<input type="radio" name="asma" value="" id="inputAsmaNo">
											<label for="inputAsmaNo" class="socio">No</label>
								</div>
								<div class="col-md-4">
									<label for="Acardiacas">Afecciones cardíacas</label>
											<input type="radio" name="Acardiacas" value="" id="inputAcardiacasSi">
											<label for="inputAcardiacasSi" class="socio">Si</label>
											<input type="radio" name="Acardiacas" value="" id="inputAcardiacasNo">
											<label for="inputAcardiacasNo" class="socio">No</label>
								</div>
						</li>
						<li><label>Otras Enfermedades</label>
							<div class="form-group row">
								<div class="col-md-3">
									<input type="radio" value="mostrar" onclick="mostrarOtrasEnfermedades()" name="OtrasEnfermedades"  id="OtrasEnfermedadesSi">
									<label for="OtrasEnfermedadesSi" class="socio">Si</label>
									<input type="radio" value="ocultar" onclick="ocultarOtrasEnfermdedades()" name="OtrasEnfermedades"  id="OtrasEnfermedadesNo">
									<label for="OtrasEnfermedadesNo" class="socio">No</label>
								</div>
								<div class="col-md-3" id="ocultoOtrasEnfermedades" style="display:none">
									<input type="text" class="form-control" name="OtrasEnfermedades" id="OtrasEnfermedades" placeholder="Cuál?">
								</div>
							</div>
						</li>
					</ul>
				<!--Enviar -->
				<div class="botonInscripcion">
					<button type="submit" class="btn btn-primary">Enviar solicitud de inscripcin</button>
				</div>
    </form>
  </div>
</section>
<?php
	require_once('parciales/modal.php');
	require_once('parciales/footer.php');
	require_once('parciales/fin_cabecera.php');
?>
