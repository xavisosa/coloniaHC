<?php 

include ('conexion2.php');
# el $_POST["id"] es el dato del input del formulario que llega a esta página

$nombre = $link -> real_escape_string($_POST["nombre"]);
$apellido = $link -> real_escape_string($_POST["apellido"]);
$nickname = $link -> real_escape_string($_POST["nickname"]);
$clave = $link -> real_escape_string($_POST["clave"]);

$sql = "INSERT INTO usuarios (nombre,apellido,nickname,password) VALUES ('$nombre','$apellido','$nickname','$clave')";

if ($link -> query($sql)) {
	$link -> close();
	echo "Usuario generado con éxito.";
    header("refresh:2; url=../abmUsuarios.php");
} else {
	echo "El registro no pudo ser procesado.\n" . $link -> error;
	$link->close();
	header("refresh:3; url=../abmUsuario.php");
}

#echo $nombre . "<br>";

#echo $apellido . "<br>";
#echo $nickname . "<br>";
#echo $clave;

#header("refresh:4; url=../abmUsuarios.php");

 ?>