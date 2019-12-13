<?php
	// Crear cookie
	session_start(["name" => "colonia_user"]);
	$conectado = False;
	// Comprobar si el usuario inicio sesión
	if (isset($_SESSION['id_user']) && isset($_SESSION['user'])) {
		$conectado = True;
	}
 ?>

<!DOCTYPE html>
<html lang="ES-es">
<head>
	<meta charset="UTF-8">
	<title>Colonia en Hurling</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo.css">
	<!-- Estilos -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="icon" href="imagen/logo.png">
	<link rel="stylesheet" href="style/principal.css">
	<link rel="stylesheet" href="style/inscripcion.css">
	<link rel="stylesheet" href="style/responsive.css">
</head>
<body>
