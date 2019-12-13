<!-- Modal acceso usuario -->
<div class="modal fade" id="accesousuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="php/iniciarsesion.php" method="POST">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Acceso al Sistema</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="md-form mb-2">
						<i class="fa fa-user prefix grey-text"></i>
						<input type="text" id="user" name="user" class="form-control validate" value="radgnar">
						<label data-error="wrong" data-success="right" for="user">Nombre de Usuario</label>
					</div>
					<div class="md-form mb-2">
						<i class="fa fa-lock prefix grey-text"></i>
						<input type="password" id="clave" name="clave" class="form-control validate" value="zoecita1">
						<label data-error="wrong" data-success="right" for="clave">Contraseña</label>
					</div>
					<div class="md-form mb-1">
						<a href="abmUsuarios.php">Crear nuevo Usuario</a>
					</div>
				<div class="modal-footer d-flex justify-content-center">
					<button class="btn btn-secondary btn-lg btn-block" type="submit">Acceder</button>
				</div>
			</div>
		</form>
	</div>
</div>