<?php
    require_once "Config/Autoload.php";
    use models\Client as Client;

    $userName = $_POST["userName"];
    $password = $_POST["password"];
    if($userName == 'Cosme Fulanito'){
        if($password == 'strongPassword'){
            session_start();
            header("location:add-bill.php");
        }else{
            echo '<script language="javascript">alert("Contraseña incorrecta");</script>';
            header("location:index.php");
        }
    }else{
        echo '<script language="javascript">alert("Usuario Incorrecto");</script>';
        header("location:index.php");
    }

?>