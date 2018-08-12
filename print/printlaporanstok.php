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
$pdf -> Cell(190,7,'Laporan Stok Obat " APOTIK K24 "',0,1,'C');
$pdf -> SetFont('Arial','','12');
$pdf -> Cell(190,7,'Jalan Gajah Mungkur Nomor 142, Surabaya , Jawa Timur ',0,1,'C');
$pdf -> SetFont('Arial','','10');
$pdf -> Cell(190,7,'No Telp : 08213412345 atau Email : apotik24surabaya.com',0,1,'C');
$pdf -> Cell(190,7,'===========================================================================================',0,1);
$pdf->Cell(5,7,'',0,1);

$pdf->SetFont('Arial','',9);
$host = "localhost";
$user = "root";
$pass = "sepatusandal12";
$db   = "uaspweb";




// $id = $_GET['print'];




$pdf->Cell(20,8,"Kode Obat",1,0,'C');
$pdf->Cell(58,8,"Nama Obat",1,0,'C');
$pdf->Cell(40,8,"Tipe Obat",1,0,'C');
$pdf->Cell(40,8,"Stok Awal",1,0,'C');
$pdf->Cell(30,8,"Stok Obat",1,0,'C');
$pdf->Cell(40,8,"Tanggal Kadaluarsa",1,1);
$view = $dbconnect -> query("SELECT * FROM masterbarang");
while ($row=$view->fetch_array()) {

	$pdf->Cell(20,8,$row['kodeobat'],1,0);
	$pdf->Cell(58,8,$row['namaobat'],1,0);
	$pdf->Cell(40,8,$row['tipeobat'],1,0);
	$pdf->Cell(30,8,$row['stokawal'],1,0);
	$pdf->Cell(30,8,$row['stok'],1,0);
	$pdf->Cell(40,8,$row['tanggalex'],1,1);
}



$pdf->Output();

?>
