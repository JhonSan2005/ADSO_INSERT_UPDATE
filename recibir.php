<?php

include("usuario.php");

$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$password = $_GET['password'];
$fecha_nacimineto = $_GET['fecha_nacimineto'];

Nombre_usuario::usuario($documento, $nombre, $password, $fecha_nacimineto);

?>
