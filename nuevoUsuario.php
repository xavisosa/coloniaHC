<?php
	require_once('parciales/inicio_cabecera.php');
	require_once('parciales/info.php');
	require_once('parciales/navbar.php');
?>	

    <!-- Formulario para Crear un nuevo Usuario -->
    <div class="container" id="nuevo-usuario">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col md-offset-2">
                <h3 class="titulo-nuevo-usuario">Registro de Nuevo Usuario Colonia en Hurling Club</h3>
                <hr>

                <form action="" method="post">
                    <h3>Registrate <small>en nuestra web para inscribirte.</small></h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" tabindex="1" autofocus>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" tabindex="2">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="usuario" id="usuario" placeholder="Nombre de Ususario" tabindex="3">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                            <input type="mail" class="form-control input-lg" name="mail" id="mail" placeholder="Correo Electrónico" tabindex="4">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Contraseña" tabindex="5">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <input type="password" class="form-control input-lg" name="repassword" id="repassword" placeholder="Repetir Contraseña" tabindex="6">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="btn btn-success btn-block">
                                <input type="checkbox" name="terminos" tabindex="7">  Acepto  
                            </label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                            Acepto los terminos y condiciones de la pagina Colonia en Hurling Club.
                            La información será uso exclusivo de la Colonia.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="submit" class="form-control input-lg btn btn-success btn-block" value="Registrar" tabindex="8">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <input type="button" class="form-control input-lg btn btn-danger btn-block" value="Cancelar" tabindex="9">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

<?php
	require_once('parciales/modal.php');
	require_once('parciales/footer.php');
	require_once('parciales/fin_cabecera.php');
?>