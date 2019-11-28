<?php 

	mysqli_report(MYSQLI_REPORT_STRICT);

	/* Crear los parametros de la conexión al Servidor BD de MYSQL */
	//$server = "localhost";
	//$user = "root";
	//$pass = "1234";
	//$db = "proyecto_final";

	$server = "localhost";//"sql130.main-hosting.eu";
	$user = "u410654721_xavisosa";
	$pass = "l4Y1eAPppjyLV2K6";
	$db = "u410654721_dato_coloniadb";

	/* Creamos un objeto ($link) que recibe la conexión desde un constructor. */
	try {
		$conn = new mysqli($server,$user,$pass,$db);
		echo "Conectado al Servidor MySQL " . $conn->server_info . "<br>";
	} catch (Exception $e) {
		echo "Service unavialable.<br>Error de configuración: ";
		echo $e->getMessage();
	}
 
?>