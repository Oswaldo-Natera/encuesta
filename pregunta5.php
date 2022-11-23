<?php
session_start();
error_reporting(0);
$sesion = $_SESSION["usuario"];
if ($_SESSION["resp4"]== null){
    $_SESSION["resp4"] = $_POST["preg4"]; 
}


if ($sesion == NULL || $sesion == "") {
    echo "Usted no tiene autorización";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPC</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <br>
    <br>
    <br>
    <form action="" method="post">
        <label for="preg5">5. ¿Se puede ser optimista sobre la situación futura de la economía de Medellín?</label>
        <br>
        <br>
        <select name="preg5" id="preg5" default="Muy bueno">
            <option value="MB">Muy bueno</option>
            <option value="B">Bueno</option>
            <option value="R">Regular</option>
            <option value="M">Malo</option>
            <option value="P">Pesimo</option>
        </select>
        <br>
        <br>
        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta4.php'">
        <input type="submit" value="Siguiente >" onclick="this.form.action='respuestas.php'">
    </form>
    <?php
        include("footer.php");
        $_SESSION["resp5"] = $_POST["preg5"]; 
    ?>   
</body>
</html>
