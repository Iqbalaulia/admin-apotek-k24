<?php
 require('fpdf.php');

 // intance object dan memberikan pengaturan halaman PDF
 $pdf = new FPDF('l','mm','A5');

 // membuat halaman baru
 $pdf->AddPage();
 // setting jenis font yang akan digunakan
 $pdf->SetFont('Arial','B',16);
 // mencetak string
 $pdf->Cell(190,7,'Laporan Data Detail ',0,1,'C');
 $pdf->SetFont('Arial','B',12);
 $pdf->Cell(190,7,'Peroide 1 Januari - 31 Desember 2018',0,1,'C');

 // Memberikan space kebawah agar tidak terlalu rapat
 $pdf->Cell(10,7,'',0,1);

 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(20,6,'Kode Transaksi',1,0);
 $pdf->Cell(50,6,'Kode',1,0);
 $pdf->Cell(27,6,'Nama',1,0);
 $pdf->Cell(25,6,'Satuan',1,0);
 $pdf->Cell(27,6,'Jumlah',1,0);
 $pdf->Cell(27,6,'Harga',1,1);

 $pdf->SetFont('Arial','',10);

 include 'koneksi.php';
 $tbldetail = mysqli_query($conn, "select * from tbldetail");
 while ($row = mysqli_fetch_array($tbldetail)){
 $pdf->Cell(20,6,$row['kodetr'],1,0);
 $pdf->Cell(50,6,$row['kode'],1,0);
 $pdf->Cell(27,6,$row['nama'],1,0);
 $pdf->Cell(25,6,$row['satuan'],1,0);
 $pdf->Cell(27,6,$row['jumlah'],1,0);
 $pdf->Cell(27,6,$row['harga'],1,1);
}

$pdf->Output();
?>
