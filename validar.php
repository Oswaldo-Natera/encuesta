<?php 
    session_start();
    $input = md5($_POST["usuario"].$_POST["pwd"]);
    //usuario = oswaldo | contraseña = 1234

    if (isset($_POST["usuario"]) and isset($_POST["pwd"])) {
        if (preg_match("/^\\d+$/",$_POST["pwd"]) and preg_match("/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/",$_POST["usuario"])) {    
            if ( $input == "1744691912cf36be01f0baef35da736a") {
                $_SESSION["usuario"] = $_POST["usuario"];
                header("Location:pregunta1.php");
            } else {
                echo "Usuario o contraseña incorrecta";
                header("Location:login.php");
            }
        } else {
            echo "Use solo letras en el usuario y numeros en la contraseña por favor";
            header("Location:login.php");
        }        
    }
?>