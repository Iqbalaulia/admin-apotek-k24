<?php
$host = "localhost";
$user = "root";
$pass = "sepatusandal12";
$db   = "uaspweb";

$dbconnect = new mysqli ("$host", "$user", "$pass", "$db");

require('fpdf.php');

$pdf = new FPDF('P', 'mm', 'A3');
$pdf -> AddPage();
$pdf -> SetFont('Arial','B','16');
$pdf -> Cell(280,7,'Laporan Pembelian " APOTIK K24 "',0,1,'C');
$pdf -> SetFont('Arial','','12');
$pdf -> Cell(280,7,'Jalan Gajah Mungkur Nomor 142, Surabaya , Jawa Timur ',0,1,'C');
$pdf -> SetFont('Arial','','10');
$pdf -> Cell(280,7,'No Telp : 08213412345 atau Email : apotik24surabaya.com',0,1,'C');
$pdf -> Cell(190,7,'======================================================================================================================================',0,1);
$pdf->Cell(5,7,'',0,1);

$pdf->SetFont('Arial','',9);
$host = "localhost";
$user = "root";
$pass = "sepatusandal12";
$db   = "uaspweb";




// $id = $_GET['print'];




$pdf->Cell(23,6,"Kode Obat",1,0,'C');
$pdf->Cell(25,6,"No Faktur",1,0,'C');
$pdf->Cell(28,6,"Nama Suplier",1,0,'C');
$pdf->Cell(30,6,"Nama Obat",1,0,'C');
$pdf->Cell(30,6,"Tipe Obat",1,0,'C');
$pdf->Cell(25,6,"Jumlah",1,0,'C');
$pdf->Cell(30,6,"Dosis",1,0,'C');
$pdf->Cell(27,6,"Harga",1,0,'C');
$pdf->Cell(30,6,"Tanggal Pembelian",1,0,'C');
$pdf->Cell(30,6,"Tanggal Kadaluarsa",1,1);
$view = $dbconnect -> query("SELECT * FROM laporanpembelian");
while ($row=$view->fetch_array()) {
	$pdf->Cell(23,6,$row['kodeobat'],1,0);
	$pdf->Cell(25,6,$row['nofaktur'],1,0);
	$pdf->Cell(28,6,$row['namasuplier'],1,0);
	$pdf->Cell(30,6,$row['namaobat'],1,0);
	$pdf->Cell(30,6,$row['tipeobat'],1,0);
	$pdf->Cell(25,6,$row['jumlahbarang'],1,0);
	$pdf->Cell(30,6,$row['dosis'],1,0);
	$pdf->Cell(27,6,$row['harga'],1,0);
	$pdf->Cell(30,6,$row['tanggalpembelian'],1,0);
	$pdf->Cell(30,6,$row['tanggalex'],1,1);
}

$pdf->Output();

?>