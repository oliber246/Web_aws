<?php
require 'vendor/autoload.php';
require 'conexion.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("Alumnos");

// Encabezados
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nombre');
$sheet->setCellValue('C1', 'Edad');
$sheet->setCellValue('D1', 'Matricula');
$sheet->setCellValue('E1', 'Correo');

// Datos
$sql = "SELECT * FROM rep_alumnos";
$resultado = $mysqli->query($sql);
$fila = 2;

while ($row = $resultado->fetch_assoc()) {
    $sheet->setCellValue('A' . $fila, $row['id']);
    $sheet->setCellValue('B' . $fila, $row['nombre']);
    $sheet->setCellValue('C' . $fila, $row['edad']);
    $sheet->setCellValue('D' . $fila, $row['matricula']);
    $sheet->setCellValue('E' . $fila, $row['correo']);
    $fila++;
}

// Descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte_Alumnos.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
?>