<?php
    include ("../../model/pdf.php");
    require ("../../controller/conexion.php");
    include ("../dirdep/reportes.php");
    
    $f1 = $_POST['fecha_i'];
    $f2 = $_POST['fecha_f'];
    $tip = $_POST['tipo'];
    $query = "SELECT * from productos where fecha_ingreso between '".$f1."' and '".$f2."'";
    $resultado = $mysqli->query($query);

    $pdf = new PDF();
	$pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(190,10,'Correpondiente del '.$_POST['fecha_i'] .' al '. $_POST['fecha_f'],0,1,'C');
    $pdf->SetFont('Arial','B',25);
    $pdf->Cell(190,10,$_POST['nomb'],0,1,'C');
    $pdf->Ln(10);
    
    $pdf->SetFillColor(232,232,232,232);
	$pdf->SetFont('Arial','B',15);
	$pdf->Cell(25,8,'Codigo',1,0,'C',1);
	$pdf->Cell(75,8,'Producto',1,0,'C',1);
    $pdf->Cell(25,8,'Cantidad',1,0,'C',1);
    $pdf->Cell(70,8,'Fecha de Ingreso',1,1,'C',1);

    $pdf->SetFont('Arial','',12);
	while($row = $resultado->fetch_assoc())
	{
        $pdf->Cell(25,8,utf8_decode($row['codigo']),1,0,'C',1);
        $pdf->Cell(75,8,utf8_decode($row['nombre']),1,0,'C',1);
        $pdf->Cell(25,8,utf8_decode($row['cantidad']),1,0,'C',1);
        $pdf->Cell(70,8,utf8_decode($row['fecha_ingreso']),1,1,'C',1);
	}
	$pdf->Output();
?>