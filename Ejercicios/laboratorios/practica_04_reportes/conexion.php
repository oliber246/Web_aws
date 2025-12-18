<?php
$mysqli = new mysqli("localhost", "root", "12345678", "bd_portafolio");
if ($mysqli->connect_errno)
    die("Fallo: " . $mysqli->connect_error);
?>