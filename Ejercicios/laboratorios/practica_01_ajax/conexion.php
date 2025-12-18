<?php
$host = "localhost";
$user = "root"; // CAMBIAR POR TU USUARIO DE NUBE (ej: admin_ventas)
$pass = "12345678";     // CAMBIAR POR TU CONTRASEÑA DE NUBE
$db = "bd_portafolio";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("Fallo al conectar: " . $mysqli->connect_error);
}
?>