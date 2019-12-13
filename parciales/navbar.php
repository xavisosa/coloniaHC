<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg navbar-light navbar-toggleable-sm sticky-top">
	<div class="container">
		<a class="navbar-brand" href="index.php">
			<img src="imagen/logo.png" alt="logo" width="50" height="50" 
				class="d-inline-block align-middle">	
				Colonia en Hurling Club
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" 
				data-toggle="collapse" data-target="#togMenu" 
				aria-controls="togMenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="togMenu">
		<?php if ($conectado) { ?>
			<!-- Si esta conectado mostrar avatar y nombre -->
			<div class="d-flex ml-auto flex-row justify-content-center">
				<a href="inscripcion.php" class=class="nav-item nav-link m-2 menu-item btn btn-outline-light">
					Inscripción
				</a>
			</div>
			<div class="navbar-nav ml-auto text-center">
				<a href="#" class="nav-item nav-link active">
					<img src="imagen/img-avatar1.png" alt="avatar" 
						width="40" height="40" style="border-radius: 50%">
				</a>
				<a href="#" class="nav-item nav-link m-2 menu-item" 
					style="text-transform: capitalize;"><?php echo $_SESSION['user']; ?></a>
				<a href="php/cerrarsesion.php" class="nav-item nav-link m-2 menu-item btn btn-outline-light">
					Cerrar Sesión
				</a>
			</div>
		<?php } else { ?>
			<!-- Botón Acceso-->
			<div class="d-flex ml-auto flex-row justify-content-center">
				<a href="nuevoUsuario.php" class="nav-item nav-link m-2 menu-item btn btn-outline-light">
					Registrate
				</a>	
				<a href="" class="nav-item nav-link m-2 menu-item btn btn-outline-light" 
				data-toggle="modal" data-target="#accesousuarios">
					Ingresar
				</a>
			</div>
		<?php } ?>
	</div>
</nav>