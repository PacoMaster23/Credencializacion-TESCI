<?php
// include class
require('vendor/fpdf/fpdf.php');

// create document
$pdf = new FPDF();
$pdf->AddPage();

// add text
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'ARCHIVO DE PRUEBA ', 0, 1);

// output file
$pdf->Output('', 'fpdf-basic.pdf');
