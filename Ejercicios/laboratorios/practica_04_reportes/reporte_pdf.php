<?php
require 'vendor/autoload.php'; // Carga automática de librerías
require 'conexion.php';

use Fpdf\Fpdf; // Usamos el namespace correcto si instalaste via composer, o el require directo

// Si composer instaló FPDF sin namespace (común en versiones antiguas), usamos la clase directa.
// Por compatibilidad con el comando que te di:
if (!class_exists('Fpdf\Fpdf')) {
    require('vendor/fpdf/fpdf/src/Fpdf/Fpdf.php'); // Ajuste por si acaso
}

class PDF extends \Fpdf\Fpdf
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(0, 10, 'Reporte de Alumnos - BitGlobal', 0, 1, 'C');
        $this->Ln(5);
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Encabezados
$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(60, 10, 'Nombre', 1);
$pdf->Cell(20, 10, 'Edad', 1);
$pdf->Cell(40, 10, 'Matricula', 1);
$pdf->Cell(60, 10, 'Correo', 1);
$pdf->Ln();

// Datos
$pdf->SetFont('Arial', '', 12);
$sql = "SELECT * FROM rep_alumnos";
$resultado = $mysqli->query($sql);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(10, 10, $row['id'], 1);
    $pdf->Cell(60, 10, $row['nombre'], 1);
    $pdf->Cell(20, 10, $row['edad'], 1);
    $pdf->Cell(40, 10, $row['matricula'], 1);
    $pdf->Cell(60, 10, $row['correo'], 1);
    $pdf->Ln();
}

$pdf->Output();
?>