<?php
session_start();
error_reporting(0);
$sesion = $_SESSION["usuario"];
$_SESSION["resp2"] = $_POST["preg2"]; 

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
        <label for="preg3">3. ¿Qué tan orgulloso se siente de la ciudad?</label>
        <br>
        <br>
        <select name="preg3" id="preg3" default="Muy bueno">
            <option value="MB">Muy bueno</option>
            <option value="B">Bueno</option>
            <option value="R">Regular</option>
            <option value="M">Malo</option>
            <option value="P">Pesimo</option>
        </select>
        <br>
        <br>
        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta2.php'">
        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta4.php'">
    </form>
    <?php
        include("footer.php");
    ?>   
</body>
</html>
