<?php
use setasign\Fpdi\Fpdi;

require_once('fpdf/fpdf.php');
// require_once('html2pdf/src/Html2Pdf.php');
require_once('fpdi2/src/autoload.php');

// initiate FPDI
$pdf = new Fpdi();

// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('LPM1.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 5, 5, 200);
// now write some text above the imported page
$pdf->Image('QR.jpg',160,20,35);

$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(100, 113);
$pdf->Write(0, 'This is just a simple text vody');

$pdf->Output('I', 'generated.pdf');