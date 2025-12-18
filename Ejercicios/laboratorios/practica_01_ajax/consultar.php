<?php
require 'conexion.php';

$query = "SELECT * FROM ajax_personas ORDER BY id DESC";
$datos = [];

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = [$row["id"], $row["nombres"], $row["apellidos"]];
    }
}

echo json_encode($datos);
?>