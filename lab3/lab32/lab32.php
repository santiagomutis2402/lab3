<?php
$precio = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];

$media = ($precio = $precio2 = $precio3) / 3;
echo ("<br/> Datos recibidos");
echo ("<br/> Precio producto establecimineto 1: " . $precio . "dolares ");
echo ("<br/> Precio producto establecimineto 2: " . $precio2 . "dolares");
echo ("<br/> Precio producto establecimineto 3: " . $precio3 . "dolares");
echo (" <br/> El precio del producto es de: " . $media . " dolares");