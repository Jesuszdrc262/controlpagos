<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT Folio,Lugar,Fecha,Nombre,Cantidad,Concepto from pagos";
	$resultado = $conexion->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(98, 179, 251);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'FOLIO',1,0,'C',1);
	$pdf->Cell(40,6,'LUGAR',1,0,'C',1);
	$pdf->Cell(35,6,'FECHA',1,0,'C',1);
	$pdf->Cell(35,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(25,6,'CANTIDAD',1,0,'C',1);
	$pdf->Cell(35,6,'CONCEPTO',1,1,'C',1);
	
	
	

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['Folio']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['Lugar']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['Fecha']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['Cantidad']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['Concepto']),1,1,'C');
		


	}
	$pdf->Output();
?>

