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
$pdf -> Cell(190,7,'" APOTIK K24 "',0,1,'C');
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



$id = $_GET['print'];
$view = $dbconnect -> query("SELECT DISTINCT id_transaksi, tanggalpembelian, namadokter, rumahsakit, namacustomer FROM item WHERE id_transaksi='$id'");
while ($row=$view->fetch_array()) {
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(25,7,"No. Transaksi",0,0);
	$pdf->Cell(5,7,":",0,0);
	$pdf->Cell(30,7,$row['id_transaksi'],0,1);

	$pdf->Cell(25,7,"Tgl. Transaksi",0,0);
	$pdf->Cell(5,7,":",0,0);
	$pdf->Cell(30,7,$row['tanggalpembelian'],0,1);
	$pdf->Cell(25,7,"Dokter	",0,0);
	$pdf->Cell(5,7,":",0,0);
	$pdf->Cell(30,7,$row['namadokter'],0,1);
	$pdf->Cell(25,7,"Rumah Sakit",0,0);
	$pdf->Cell(5,7,":",0,0);
	$pdf->Cell(30,7,$row['rumahsakit'],0,1);
	$pdf->Cell(25,7,"Resep untuk",0,0);
	$pdf->Cell(5,7,":",0,0);
	$pdf->Cell(30,7,$row['namacustomer'],0,1);
	$pdf->Cell(5,7,'',0,1);
}
$pdf -> Cell(190,7,'============================================================================================',0,1);


$pdf->SetFont('Arial','',10);
$pdf->Cell(15,7,'No ',0,0);
$pdf->Cell(30,7,'Kode Obat ',0,0);
$pdf->Cell(80,7,'Nama Item',0,0);
$pdf->Cell(25,7,'Jumlah',0,0);
$pdf->Cell(25,7,'Harga',0,0);
$pdf->Cell(30,7,'Total',0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(190,7,'===================================================================================================================',0,1);
$id = $_GET['print'];

$i = 1;
$view = $dbconnect -> query("SELECT * FROM item WHERE id_transaksi='$id'");
while ($row=$view->fetch_array()) {
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(15,7,$i,0,0);
	$pdf->Cell(30,7,$row['kodeobat'],0,0);
	$pdf->Cell(80,7,$row['namaobat'],0,0);
	$pdf->Cell(25,7,$row['jumlahbarang'],0,0);
	$pdf->Cell(25,7,$row['harga'],0,0);
	$pdf->Cell(30,7,$row['total'],0,1);
	$pdf->SetFont('Arial','',8);
	$i++;
}
$pdf -> Cell(190,7,'===================================================================================================================',0,1);




$id = $_GET['print'];
$view = $dbconnect -> query("SELECT DISTINCT diskonobat, totalkeseluruhan, uang_dibayarkan, kembalian FROM item WHERE id_transaksi='$id'");
while ($row=$view->fetch_array()) {
	$pdf->Cell(5,7,'',0,1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(135,7,"",0,0);
	$pdf->Cell(20,7,"Diskon",0,0);
	$pdf->Cell(20,7,":",0,0);
	$pdf->Cell(20,7,$row['diskonobat'],0,1);

	$pdf->Cell(135,7,"",0,0);
	$pdf->Cell(20,7,"Total",0,0);
	$pdf->Cell(20,7,":",0,0);
	$pdf->Cell(30,7,$row['totalkeseluruhan'],0,1);
	
	$pdf->Cell(135,7,"",0,0);
	$pdf->Cell(20,7,"Uang Bayar",0,0);
	$pdf->Cell(20,7,":",0,0);
	$pdf->Cell(30,7,$row['uang_dibayarkan'],0,1);
	
	$pdf->Cell(135,7,"",0,0);
	$pdf -> Cell(190,7,'======================== (--)',0,1);

	$pdf->Cell(135,7,"",0,0);
	$pdf->Cell(20,7,"Kembalian",0,0);
	$pdf->Cell(20,7,":",0,0);
	$pdf->Cell(30,7,$row['kembalian'],0,1);
	

}

$pdf->Cell(5,7,'',0,1);
$pdf->Cell(5,7,'',0,1);
$pdf -> Cell(190,7,'============================================================================================',0,1);
$pdf -> SetFont('Arial','B','16');
$pdf -> Cell(190,7,'" Semoga obat ini bermanfaat untuk anda dan sekeluarga "',0,1,'C');
$pdf->Output();

?>