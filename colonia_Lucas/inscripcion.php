<?php
	require_once('parciales/inicio_cabecera.php');
	require_once('parciales/navbar.php');
?>
		<section class="inscripcion">
			<h1>Inscripcion</h1>
			<div class="container1">
				<form class="" action="index.html" method="post">

					<div class="form-group row">
						<div class="col-md-6">
							<h2>Datos del colono 2018/2019</h2>
						</div>
						<div class="col-md-3">
							<label class="socioL">Socio</label>
							<input type="radio" name="socio" value="" id="inputSocioSi">
							<label for="inputSocioSi" class="socio">Si</label>
							<input type="radio" name="socio" value="" id="inputSocioNo">
							<label for="inputSocioNo" class="socio">No</label>
						</div>
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
						<!--Escuela-->
						<div class="col-md-6">
							<label for="inputEscuela" class="">Escuela a la que concurre</label>
							<input type="text" class="form-control" id="inputEscuela" placeholder="Escuela">
						</div>
					</div>
					<!--Segunda seccion-->
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
					<!--Enviar-->
					<div class="">
						<button type="submit" class="btn btn-primary">Crear</button>
					</div>
					<br>
					<div class="container2">
						<h3>Informe de Salud</h3>
						<p>Dejo constancia que mi hijo/a, goza de buena salud, autorizándolo a realizar todas las actividades deportivas y recreativas que brinda la Colonia de Vacaciones.</p>
						<p>Además, me comprometo a informar, inmediatamente, a las autoridades de la Colonia cualquier cambio en la salud de mi hijo que le impida la realización de actividades deportivas y recreativas.</p>
						<p><label>Nota:</label> cada padre será responsable de la veracidad de la información</p>
					</div>
					<div class="container3">
						<p>Informe aquí los datos que considere deba conocer el personal docente y medico:</p>
						<ul>
							<li><label>Es alérgico? </label>
								<div class="form-group row">
									<div class="col-md-3">
											<input type="radio" name="socio" value="" id="inputAlergiaSi">
											<label for="inputAlergiaSi" class="socio">Si</label>
											<input type="radio" name="socio" value="" id="inputAlergiaNo">
											<label for="inputAlergiaNo" class="socio">No</label>
									</div>
									<div class="col-md-3">
											<input type="text" class="form-control" name="alergia" id="alergia">
																						<label class="alergia" for="alergia"> A que?</label>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</section>

<?php
	require_once('parciales/modal.php');
	require_once('parciales/footer.php');
	require_once('parciales/fin_cabecera.php');
?>
