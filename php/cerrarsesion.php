<?php
    session_start(["name" => "colonia_user"]);
    
    if (isset($_SESSION['id_user']) && isset($_SESSION['user'])) {
        echo "Cerrando sesión...";
        session_unset($_SESSION['id_user']);
        session_unset($_SESSION['user']);
        session_destroy();
        header("refresh:2,url=../index.php");
    } else {
        
    }
?>