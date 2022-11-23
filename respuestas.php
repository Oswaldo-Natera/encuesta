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
    <style>
        body{
            background-color: #E5E7E9;
        }
    </style>
</head>
<body>
    <h1>Encuesta de percepcion ciudadana</h1>
    <br>
    <h2>Respuestas</h2>
    <br>
    <p>¿Qué tan satisfecho se siente con la ciudad como un lugar para vivir?</p>
    <br>
    <p><?php echo $_SESSION["resp1"] ?></p>
    <br>
    <p>Optimismo: ¿Piensa que las cosas en la ciudad van por buen camino?</p>
    <br>
    <p><?php echo $_SESSION["resp2"] ?></p>
    <br>
    <p>¿Qué tan orgulloso se siente de la ciudad?</p>
    <br>
    <p><?php echo $_SESSION["resp3"] ?></p>
    <br>
    <p>¿Qué tan de acuerdo está Usted con que en su ciudad es fácil encontrar trabajo?</p>
    <br>
    <p><?php echo $_SESSION["resp4"] ?></p>
    <br>
    <p>¿Se puede ser optimista sobre la situación futura de la economía de Medellín?</p>
    <br>
    <p><?php echo $_POST["preg5"] ?></p>
    <br>
    <?php 
        $resp = array($_SESSION["resp1"],$_SESSION["resp2"],$_SESSION["resp3"],$_SESSION["resp4"],$_POST["preg5"]);
        $puntos = array("MB"=>5,"B"=>4,"R"=>3,"M"=>2,"P"=>1);
        $total = NULL;
        
        foreach ($resp as $r) {
            foreach ($puntos as $key => $value) {
                if ($r == $key) {
                    $total += $value;
                }
            }
        }
    ?>
    <h2>Promedio de la ciudad</h2>
    <br>
    <p>El promedio de la ciudad es <?php echo ($total/5) ?></p>
    <br>
    <script>
        function cerrarSesion(){
            window.location.href="./cerrar_sesion.php"
        }
        function Anterior(){
            window.location.href="./pregunta5.php"
        }
    </script>
    <input type="submit" value="< Anterior" onclick=Anterior()>
    <input type="submit" value="Salir" onclick=cerrarSesion()>
</body>
</html>