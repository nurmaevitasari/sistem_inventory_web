<?php
include 'config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../logo/aptek.jpg',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PT.ANUGRAH PRATAMA TEKNOLOGI',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Asem Baris Raya,No.96, Jakarta Selatan',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 021-8314227',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.Aptek.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(26.5,0.8,"Laporan Data CORD FO LC",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Masuk', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Keluar', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Unit', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Suplier', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Project', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Stock', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from patch_fo_lc");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['Tanggal'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['Masuk'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['Keluar'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['Unit'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['Suplier'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['Project'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['Stock'], 1, 1, 'C');

	$no++;
}

$pdf->Output("laporan_patch_fo_lc.pdf","I");

?>

