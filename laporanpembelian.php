<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Master Barang</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!--  jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  
  <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

  <!-- Bootstrap Date-Picker Plugin -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <script type="text/javascript" src="js/mbarang.js"></script>
  <!-- Icon Title -->
  <link rel="shortcut icon" href="img/folder.png">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
 <?php
 include 'navbar.php';
 ?>
 <div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Laporan Pembelian</li>
    </ol>

    
    <br>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Laporan Pembelian</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode Obat</th>
                  <th>No Faktur</th>
                  <th>Nama Suplier</th>
                  <th>Nama Obat</th>
                  <th>Tipe Obat</th>
                  <th>Stok Obat</th>
                  <th>Dosis Obat</th>
                  <th>Harga Beli</th>

                  <th>Tanggal Pembelian</th>
                  <th>Tanggal Expired</th>
                 
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Kode Obat</th>
                 <th>No Faktur</th>
                 <th>Nama Suplier</th>
                 <th>Nama Obat</th>
                 <th>Tipe Obat</th>
                 <th>Stok Obat</th>
                 <th>Dosis Obat</th>
                 <th>Harga Beli</th>

                 <th>Tanggal Pembelian</th>
                 <th>Tanggal Expired</th>
                 

               </tr>
             </tfoot>
             <tbody>
              <?php 
              include 'config.php';
              $view = $dbconnect -> query("SELECT * FROM laporanpembelian");
              while ($row=$view->fetch_array()) {

              ?>
              <tr>
                <td><?php echo $row['kodeobat']; ?></td>
                <td><?php echo $row['nofaktur']; ?></td>
                <td><?php echo $row['namasuplier']; ?></td>
                <td><?php echo $row['namaobat']; ?></td>
                <td><?php echo $row['tipeobat']; ?></td>
                <td><?php echo $row['jumlahbarang']; ?></td>
                <td><?php echo $row['dosis']; ?></td>
                <td>Rp. <?php echo $row['harga']; ?></td>
                <td><?php echo $row['tanggalpembelian']; ?></td>
                <td><?php echo $row['tanggalex']; ?></td>
               <!--  <td> -->

                <!--  <a class="btn btn-outline-success fa fa-send" href="print/printlaporanpembelian.php?print=<?php echo $row['kodeobat']; ?>" name="print">Print</a> -->
               <!-- </td> -->
             </tr>
             <?php
           }
           ?>
         </tbody>
       </table>
       <br>
       <a class="btn btn-outline-success fa fa-send" href="print/PLPembelianALL.php" name="print" style="margin-left: 1%;">Print Keseluruhan</a>
     </div>
   </div>
   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
 </div>
</div>


<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © Your Website 2018</small>
    </div>
  </div>
</footer>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>


<!-- Logout Modal-->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div> -->

</div>
</div>
</div>





<!-- Bootstrap core JavaScript-->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->

<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>



</div>

</body>

</html>

