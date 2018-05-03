<?php 

/**
* 
*/
require_once ('printer_api/fpdf.php');
require_once('printer_api/makefont/makefont.php');


class Pdf_report extends FPDF
{

	// function __construct()
	// {
	// 	$pdf = new Pdf_report();

	// 	$pdf->AliasNbPages();
	// 	$pdf->AddPage();
	// 	$pdf->SetFont('Times','',12);
	// 	for($i=1;$i<=40;$i++)
	// 	    $pdf->Cell(0,10,'Impression de la ligne numéro '.$i,0,1);
	// 	$pdf->Output();
	// }

	// En-tête
	function Header()
	{
	    // Logo
	   // $this->Image('logo.png',10,6,30);
	    // Police Arial gras 15
	    $this->SetFont('Times','B',15);
	    
	    // Titre
	    // $this->Cell(30,10,'Titre',1,0,'C');
	    $this->Cell(30,10,'IHC',1,0,'C');
	   // $this->AddFont('Comic','B','comicbd.php');
	    $this->Cell(70,10,'institution henry christophe',1,0,'C');
	    // Saut de ligne
	    $this->Ln(20);
	}

	// Pied de page
	function Footer()
	{
	    // Positionnement à 1,5 cm du bas
	    $this->SetY(-15);
	    // Police Arial italique 8
	    $this->SetFont('Arial','I',8);
	    // Numéro de page
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

$pdf = new Pdf_report();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'Hello World !');
$pdf->Output();
