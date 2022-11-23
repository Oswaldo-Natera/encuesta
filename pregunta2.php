<?php
session_start();
error_reporting(0);
$sesion = $_SESSION["usuario"];
if ($_SESSION["resp1"]== null){
    $_SESSION["resp1"] = $_POST["preg1"]; 
}
if ($_SESSION["resp3"]== null){
    $_SESSION["resp3"] = $_POST["preg3"]; 
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
        <label for="preg2">2. Optimismo: ¿Piensa que las cosas en la ciudad van por buen camino?</label>
        <br>
        <br>
        <select name="preg2" id="preg2" default="Muy bueno">
            <option value="MB">Muy bueno</option>
            <option value="B">Bueno</option>
            <option value="R">Regular</option>
            <option value="M">Malo</option>
            <option value="P">Pesimo</option>
        </select>
        <br>
        <br>
        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta1.php'">
        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta3.php'"> 
    </form>
    <?php
        include("footer.php");
        $_SESSION["resp2"] = $_POST["preg2"]; 
    ?>   
</body>
</html>
