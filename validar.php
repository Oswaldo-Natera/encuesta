<?php 
    session_start();
    $usur = "oswaldo";
    $pwd = 1234;
    if (isset($_POST["usuario"]) and isset($_POST["pwd"])) {
        if (preg_match("/^\\d+$/",$_POST["pwd"]) and preg_match("/^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/",$_POST["usuario"])) {
            if (($_POST["usuario"]==$usur) and ($_POST["pwd"]==$pwd)) {
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