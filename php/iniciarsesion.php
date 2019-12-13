<?php

    include_once('conexion.php');
    session_start(["name" => "colonia_user"]);
    $msj = "Consultar al adminstrador de la web.";

    // Negar empty, no usar isset, dejarlo solo para el $_SESSION
    if (isset($_POST['user']) && isset($_POST['clave'])) {
        $stmt = $conn->prepare("SELECT * FROM usuarios where user = ? and clave = ?");
        $stmt->bind_param("ss",$_POST['user'],$_POST['clave']);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($fila = $result->fetch_assoc()) {
            $_SESSION['id_user'] = $fila['id_user'];
            $_SESSION['user'] = $fila['nombre'].' '.$fila['apellido'];
        }
        if(!empty($_SESSION['id_user']) && !empty($_SESSION['user'])){
            $msj = "Iniciando sesión...";
        } else {
            $msj = "Usuario y/o clave incorrecta.";
        } 
    }
    $conn->close();
    echo $msj;
    header("refresh:3,url=../index.php");
?>










<!--$msg = '';
    
        //$_SESSION['user'] = $_POST['user'];
        //$_SESSION['clave'] = $_POST['clave'];
        /*&& clave_verify($_POST['clave'])*/

    /*while ($fila = $result->fetch_assoc()) {
            echo $fila['id'];
            echo $fila['nombre'];
            echo $fila['apellido'];
            echo $fila['user'];
            echo $fila['clave'];   
        }*/
    
    if (!empty($_POST['user']) && !empty($_POST['clave'])){
        $result = $conn->prepare('select id,nombre,apellido from usuarios where'user = ?');
        echo 'prepare';
   ult->bind_param('s',$_POST['user']);
        echo 'bind';
        $result->execute();
        echo 'exe';
        while ($r = $result->fetch()) {
            echo $r;
        }
        
         
        //PDO::FETCH_ASSOC
     
      /*if(count($resultados) > 0 && clave_verify($_POST['clave'])){
       $_SESSION['id_user'] = $resultados['id'];
       $_SESSION['user'] = $resultados['nombre'].' '.$resultados['apellido'];
       header("refresh:2,url=index.php");
       $msg = 'Entre como usuario.';
    } else {
       $msg = 'Error al iniciar sesión.';
    }-->