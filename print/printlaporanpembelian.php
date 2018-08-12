<?php
$host = "localhost";
$user = "root";
$pass = "sepatusandal12";
$db   = "uaspweb";

$dbconnect = new mysqli ("$host", "$user", "$pass", "$db");

require('fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');
$pdf -> AddPage();
$pdf -> SetFont('Arial','B','16');
$pdf -> Cell(190,7,'Periode 1 Januari - 31 Desember 2018',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf -> SetFont('Arial','B','16');
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','',10);
$host = "localhost";
$user = "root";
$pass = "sepatusandal12";
$db   = "uaspweb";




$id = $_GET['print'];

$laporan = mysqli_query($dbconnect, "SELECT * FROM laporanpembelian WHERE kodeobat='$id'");
while ($row = mysqli_fetch_array($laporan)) {
	$pdf->Cell(30,6,$row['kodeobat'],1,0);
	$pdf->Cell(30,6,$row['nofaktur'],1,0);
	$pdf->Cell(30,6,$row['namasuplier'],1,0);
	$pdf->Cell(30,6,$row['namaobat'],1,0);
	$pdf->Cell(30,6,$row['tipeobat'],1,0);
	$pdf->Cell(30,6,$row['jumlahbarang'],1,0);
	$pdf->Cell(30,6,$row['dosis'],1,0);
	$pdf->Cell(30,6,$row['harga'],1,0);
	$pdf->Cell(30,6,$row['tanggalpembelian'],1,0);
	$pdf->Cell(30,6,$row['tanggalex'],1,0);
}

$pdf->Output();

?>