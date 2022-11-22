<?php
session_start();
error_reporting(0);
$sesion = $_SESSION["usuario"];
$_SESSION["resp3"] = $_POST["preg3"]; 

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
        <label for="preg4">4. ¿Qué tan de acuerdo está Usted con que en su ciudad es fácil encontrar trabajo?</label>
        <br>
        <br>
        <select name="preg4" id="preg4" default="Muy bueno">
            <option value="MB">Muy bueno</option>
            <option value="B">Bueno</option>
            <option value="R">Regular</option>
            <option value="M">Malo</option>
            <option value="P">Pesimo</option>
        </select>
        <br>
        <br>
        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta3.php'">
        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta5.php'"> 
    </form>
    <?php
        include("footer.php");
    ?>   
</body>
</html>
