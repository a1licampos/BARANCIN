<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "enn";

$conexion = new mysqli($host, $user, $pass, $db);

if($conexion->connect_errno) {
    die ("Ha ocurrido un error" . $conexion->connect_errno);
}
?>