<?php
session_start();
error_reporting(0);
$sesion = $_SESSION["usuario"];

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
        <label for="preg1">1. ¿Qué tan satisfecho se siente con la ciudad como un lugar para vivir?</label>
        <br>
        <br>
        <br>
        <select name="preg1" id="preg1">
            <option value="MB">Muy bueno</option>
            <option value="B">Bueno</option>
            <option value="R">Regular</option>
            <option value="M">Malo</option>
            <option value="P">Pesimo</option>
        </select>
        <br>
        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta2.php'">
    </form>
    <?php
        include("footer.php");
    ?>   
</body>
</html>