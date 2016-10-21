<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require ('fpdf.php');

//$pdf = new FPDF();
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetTitle("kookkai");
$pdf->SetSubject('kookkai_Subject');
$pdf->Cell(200, 50, 'Hello World');
$pdf->Output();


?>
