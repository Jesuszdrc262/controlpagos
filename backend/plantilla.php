<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('agua.png', 5, 2, 40 );
			$this->SetFont('Times','B',35);
			$this->Cell(40);
			$this->Cell(120,20, 'Reporte De Pagos',0,0,'C');
			$this->Ln(30);
		}		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Times','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>

