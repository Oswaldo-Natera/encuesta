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
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="pwd">Contraseña</label>
        <input type="password" name="pwd" id="pwd">
        <br>
        <input type="submit" value="Login" onclick="this.form.action='validar.php'">
    </form>
    <?php 
        include("footer.php");
    ?>
</body>
</html>
<!-- http://localhost/php-oa/encuesta/login.php -->