<?php
require 'conexion.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

// Usamos la tabla con prefijo que creamos
$sql = "INSERT INTO ajax_personas (nombres, apellidos) VALUES ('$nombres', '$apellidos')";

if ($mysqli->query($sql)) {
    echo "Guardado con éxito en BD Portafolio";
} else {
    echo "Error: " . $mysqli->error;
}
?>