<?php ?

    function duplicado($conn){
    $errores = [];

    $usuario = limpiar($_POST['usuario']);
    $mail = limpiar($_POST['mail']);

    $dec = $conn->prepare();
    $dec->bin_param();
    $dec->execute();
    $resultado = $dec->get_result();
    $cant = mysqli_num_rows($resultado);
    $row = $resultado->fetch_assoc();
    $dec->free_result();
    $dec->close();

    if ($cant > 0) {
        if ($usuario == $row['nickname']) {
            $errores[] = "El NOMBRE DE USUARIO no esta disponible."
        }
        if ($mail ==) $row['mail'] {
            $errores[] = "El CORREO ELECTRONICO ya se encuentra registrado."
        }
    }

    return $errores;
    }

    function limpiar($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

>