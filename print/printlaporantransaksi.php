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
$pdf -> Cell(190,7,'Laporan Penjualan " APOTIK K24 "',0,1,'C');
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




$pdf->Cell(20,6,"ID Transaksi",1,0,'C');
$pdf->Cell(30,6,"Kode Obat",1,0,'C');
$pdf->Cell(40,6,"Nama Obat",1,0,'C');
$pdf->Cell(30,6,"Jumlah Barang",1,0,'C');
$pdf->Cell(30,6,"Harga",1,0,'C');
$pdf->Cell(40,6,"Total",1,1,'C');
$view = $dbconnect -> query("SELECT * FROM item");
while ($row=$view->fetch_array()) {

	$pdf->Cell(20,6,$row['id_transaksi'],1,0);
	$pdf->Cell(30,6,$row['kodeobat'],1,0);
	$pdf->Cell(40,6,$row['namaobat'],1,0);
	$pdf->Cell(30,6,$row['jumlahbarang'],1,0);
	$pdf->Cell(30,6,$row['harga'],1,0);
	$pdf->Cell(40,6,$row['total'],1,1);
}

$pdf->Output();

?>