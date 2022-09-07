<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3.3</title>
</head>

<body>
    <?php
    if (array_key_exists('enviar', $_POST)) {
        if ($_REQUEST['Apellido'] != " ") {
            echo "El apellido ingresado es:  $_REQUEST[Apellido]";
        } else {
            echo "Favor coloque el apellido";
        }
        echo "<br>";

        if ($_REQUEST['Nombre'] != " ") {
            echo "El nombre ingresado es : $_REQUEST[Nombre]";
        } else {
            echo "Favor coloque el nombre";
        }
    } else {
    ?>

    <form action="" method="POST">
        <h2>Nombre</h2>
        <input type="text" name="Nombre">
        <br>
        <h2>Apellido</h2>
        <input type="text" name="Apellido">
        <br><br>
        <input type="submit" name="enviar" value="Enviar Datos">
    </form>
    <?php
    }
    ?>
</body>

</html>