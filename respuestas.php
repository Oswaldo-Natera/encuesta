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
    <h1>Encuesta de percepcion ciudadana</h1>
    <br>
    <h2>Respuestas</h2>
    <br>
    <p>¿Qué tan satisfecho se siente con la ciudad como un lugar para vivir?</p>
    <br>
    <p><?php echo $_POST["preg1"] ?></p>
    <br>
    <br>
    <p>Optimismo: ¿Piensa que las cosas en la ciudad van por buen camino?</p>
    <br>
    <p><?php echo $_POST["preg2"] ?></p>
    <br>
    <br>
    <p>¿Qué tan orgulloso se siente de la ciudad?</p>
    <br>
    <p><?php echo $_POST["preg3"] ?></p>
    <br>
    <br>
    <p>¿Qué tan de acuerdo está Usted con que en su ciudad es fácil encontrar trabajo?</p>
    <br>
    <p><?php echo $_POST["preg4"] ?></p>
    <br>
    <br>
    <p>¿Se puede ser optimista sobre la situación futura de la economía de Medellín?</p>
    <br>
    <p><?php echo $_POST["preg5"] ?></p>
    <br>
    <br>
    <h2>Promedio de la ciudad</h2>
    <br>
    <p>El promedio de la ciudad es </p>
    <br>
    <input type="submit" value="< Anterior" onclick="this.form.action='pregunta5.php'">
    <input type="submit" value="Salir" onclick="this.form.action='cerrar_sesion.php'">
</body>
</html>