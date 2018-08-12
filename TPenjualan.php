<?php 
      session_start();
      include 'config.php';

      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Transaksi Penjualan</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

  <!-- <script type="text/javascript" src="js/mbarang.js"></script> -->
  <!-- Icon Title -->
  <link rel="shortcut icon" href="img/transaction.png">

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
          <li class="breadcrumb-item active">Transaksi Penjualan</li>
        </ol>
        <!-- Example DataTables Card-->
        <!--  -->
        <br>
        <form action="TPenjualan.php" method="POST">
          <div class="form-row">
            <div class="col-md-6">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Data</div>
                <div class="card-body">
                  <div class="form-row">
                    <div class="col-md-12">
                      <label>Nama Customer</label>
                      <input class="form-control" type="text" name="namacustomer" value="<?php echo $_SESSION['namacustomer'] ;?>">
                    </div>
                    <div class="col-md-12">
                      <label>Nama Rumah Sakit</label>
                      <input class="form-control" type="text" name="rumahsakit" value="<?php echo $_SESSION['rumahsakit'] ;?>">
                    </div>
                    <div class="col-md-12">
                      <label>Nama Dokter</label>
                      <input class="form-control" type="text" name="namadokter" value="<?php echo $_SESSION['namadokter'] ;?>">
                    </div>
                    <div class="col-md-12">
                      <label>Alamat Rumah Sakit</label>
                      <input class="form-control" type="text" name="alamat" value="<?php echo $_SESSION['alamat'] ;?>">
                    </div>
                    <div class="col-md-12">
                      <label>Tanggal Transaksi Penjualan</label>
                      <input class="form-control" type="date" name="tanggalpembelian" value="<?php echo $_SESSION['tanggalpembelian'] ;?>">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <br>
                        <input type="submit" class="btn btn-success" name="pilihbarang" value="Pilih Barang">
                      </div>
                    </div>
                  </div>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <!-- Data Transaksi Penjualan -->
          <div class="form-row">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Keranjang</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Kode Obat</th>
                          <th>Nama Obat</th>
                          <th>Tipe Obat</th>
                          <th>Stok</th>
                          <th>Harga Jual</th>
                          <th>Jumlah Barang</th>
                          <th>Total</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Kode Obat</th>
                          <th>Nama Obat</th>
                          <th>Tipe Obat</th>
                          <th>Stok</th>
                          <th>Harga Jual</th>
                          <th>Jumlah Barang</th>
                          <th>Total</th>
                          <th>Aksi</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php 
                           include 'config.php';
                           $view = $dbconnect -> query("SELECT * FROM tpenjualan");
                           while ($row=$view->fetch_array()) {

                            ?>
                        <tr>

                          <td>
                            <?php echo $row['kodeobat']; ?>
                            <input type="text" hidden="hidden" name="kodeobat[]" value="<?php echo $row['kodeobat']; ?>">
                          </td>
                          <td>
                            <?php echo $row['namaobat']; ?>
                            <input type="text" hidden="hidden" name="namaobat[]" value="<?php echo $row['namaobat']; ?>">
                          </td>
                          <td>
                            <?php echo $row['tipeobat']; ?>
                            <input type="text" hidden="hidden" name="tipeobat[]" value="<?php echo $row['tipeobat']; ?>">
                          </td>
                          <td>
                            <?php echo $row['stok']; ?>
                            <input type="text" hidden="hidden" name="stok[]" value="<?php echo $row['stok']; ?>">
                          </td>
                          <td>
                            <?php echo $row['hargajual']; ?>
                            <input type="text" hidden="hidden" name="hargajual[]" value="<?php echo $row['hargajual']; ?>">
                          </td>
                          <td>
                            <?php echo $row['jumlahbarang']; ?>
                            <input type="text" hidden="hidden" name="jumlahbarang[]" value="<?php echo $row['jumlahbarang']; ?>">
                          </td>
                          <td>
                            <?php echo $row['total']; ?>
                            <input type="text" hidden="hidden" name="total[]" value="<?php echo $row['total']; ?>">
                          </td>
                          <td>
                            <center>

                              <a class="btn btn-outline-danger fa fa-trash" name="delete" href="TPenjualan.php?kodeobat=<?php echo $row['kodeobat'];?>">Hapus</a>
                          </td>
                        </tr>
                        <?php
                           }
                           ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
          </div>
          <!--Total  -->
          <div class="form-row">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2" id="warning_kodeobat">
              <label>Total Pembelian</label>
              <?php 
                 include 'config.php';
                 $view = $dbconnect -> query ("SELECT SUM(`total`) AS totalpenjualan FROM tpenjualan");
                 while ($row=$view->fetch_array()) {
                   ?>
              <input id="totalpembelian" type="text" name="totalpenjualan" class="form-control" value="<?php echo $row['totalpenjualan']; ?>" id="">
              <br>
              <label>Uang dibayarkan</label>
              <br>
              <input id="uang_dibayarkan" type="text" name="uang_dibayarkan" class="form-control" id="" placeholder="Rp.">
              <br>
            </div>
            <div class="col-md-0.5 col-sm-0.5 col-lg-0.5 col-xs-0.5">
                  <label>Diskon</label>
                  <br>
                  <select name="diskonobat" class="form-control ">
                   <option value="0 ">0</option>
                   <option value="0.1 ">0.1</option>
                   <option value="0.2 ">0.2</option>
                   <option value="0.3 ">0.3</option>
                   <option value="0.4 ">0.4</option>
                   <option value="0.5 ">0.5</option>
                   <option value="0.6 ">0.6</option>
                   <option value="0.7 ">0.7</option>
                   <option value="0.8 ">0.8</option>
                   <option value="0.9 ">0.9</option>
                   <option value="1 ">1</option>
                 </select>
               </div>
             </div>
            
             <input type="submit" class="btn btn-success" name="Simpantransaksi" value="Simpan Transaksi">
             <?php 
           } 
           ?>
         </form>
         <br>
         <br>
       </div>
     </div>

     <!-- /.container-fluid-->
     <!-- /.content-wrapper-->
     <footer class="sticky-footer ">
      <div class="container ">
        <div class="text-center ">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded " href="#page-top ">
      <i class="fa fa-angle-up "></i>
    </a>
  </div>
</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js "></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
<!-- Core plugin JavaScript-->

<script src="vendor/jquery-easing/jquery.easing.min.js "></script>
<!-- Page level plugin JavaScript-->

<script src="vendor/datatables/jquery.dataTables.js "></script>
<script src="vendor/datatables/dataTables.bootstrap4.js "></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js "></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js "></script>



</div>

</body>

</html>



<?php 
include 'config.php';

if (isset($_POST['tambah'])) {

  $kodeobat = $_POST['kodeobat'];
  $namaobat = $_POST['namaobat'];
  $tipeobat = $_POST['tipeobat'];
  $stok = $_POST['stok'];
  $hargajual = $_POST['hargajual'];
  $jumlahbarang = $_POST['jumlahbarang'];
  $total = $hargajual * $jumlahbarang;

  mysqli_query($dbconnect, "INSERT INTO tpenjualan(kodeobat, namaobat, tipeobat, stok, hargajual,jumlahbarang, total) VALUES ( '$kodeobat', '$namaobat', '$tipeobat', '$stok', '$hargajual', '$jumlahbarang', '$total') ");

  echo '<META HTTP-EQUIV="Refresh " Content="0; URL=TPenjualan.php ">';
}else if (isset($_GET['kodeobat'])) {

 $kodeobat = $_GET['kodeobat'];
 $query = $dbconnect->query("DELETE FROM tpenjualan WHERE kodeobat='".$kodeobat."' ");
 echo '<META HTTP-EQUIV="Refresh " Content="0; URL=TPenjualan.php ">';


}if (isset($_POST['Simpantransaksi'])) {

  $namacustomer = $_POST['namacustomer'];
  $rumahsakit = $_POST['rumahsakit'];
  $namadokter = $_POST['namadokter'];
  $alamat = $_POST['alamat'];
  $tanggalpembelian = $_POST['tanggalpembelian'];

  $idtransaksi = rand(999,900000);
  $kodeobat = $_POST['kodeobat'];
  $namaobat = $_POST['namaobat'];
  $tipeobat = $_POST['tipeobat'];
  $harga = $_POST['hargajual'];
  $jumlah = $_POST['jumlahbarang'];
  $total = $_POST['total'];
  $totalpenjualan = $_POST['totalpenjualan'];

  $barangyangdibeli = count($namaobat);

  $diskonobat = $_POST['diskonobat'];
  $uang_dibayarkan = $_POST['uang_dibayarkan'];

  

  // // Perhitungan
  $total_kali_diskon = $totalpenjualan * $diskonobat;
  $totalkeseluruhan = $totalpenjualan - $total_kali_diskon;
  $kembalian = $uang_dibayarkan - $totalkeseluruhan;
  //echo $kodeobat;
  // echo "string ";
  for ($i=0; $i < $barangyangdibeli; $i++) { 

    $id_item = rand(999,9000) . $i;



    // echo $id_item." ".$idtransaksi." ".$kodeobat[$i]." ".$namaobat[$i]." ".$tipeobat[$i]." ".$harga[$i]." ".$jumlah[$i]." ".$total[$i]." ".$totalpenjualan[$i].'<br>';


    mysqli_query($dbconnect, "INSERT INTO item (id_item, id_transaksi, namacustomer, rumahsakit, namadokter, alamat, tanggalpembelian, kodeobat, tipeobat , namaobat, harga, jumlahbarang, total, diskonobat, uang_dibayarkan, totalkeseluruhan, kembalian) VALUES ( '$id_item', '$idtransaksi', '$namacustomer', '$rumahsakit', '$namadokter', '$alamat', '$tanggalpembelian', '$kodeobat[$i]', '$tipeobat[$i]' , '$namaobat[$i]', '$harga[$i]', '$jumlah[$i]', '$total[$i]', '$diskonobat', '$uang_dibayarkan', '$totalkeseluruhan', '$kembalian') ");

    $query = "SELECT * FROM masterbarang WHERE namaobat='$namaobat[$i]' AND tipeobat='$tipeobat[$i]' ";
    $hasil = mysqli_query($dbconnect, $query);
    $row = mysqli_fetch_array($hasil);

    $stokawal = $row['stok'];
    $sisastok = $stokawal - $jumlah[$i];

    mysqli_query($dbconnect, "UPDATE masterbarang SET stok='$sisastok' WHERE namaobat='$namaobat[$i]' AND tipeobat='$tipeobat[$i]' ");
    echo '<META HTTP-EQUIV="Refresh " Content="0; URL=TPenjualan.php ">'; 
  }
}elseif (isset($_POST['pilihbarang'])) {
  $namacustomer = $_POST['namacustomer'];
  $rumahsakit = $_POST['rumahsakit'];
  $namadokter = $_POST['namadokter'];
  $alamat = $_POST['alamat'];
  $tanggalpembelian = $_POST['tanggalpembelian'];

  session_start();
  $_SESSION['namacustomer'] = $namacustomer;
  $_SESSION['rumahsakit'] = $rumahsakit;
  $_SESSION['namadokter'] = $namadokter;
  $_SESSION['alamat'] = $alamat;
  $_SESSION['tanggalpembelian'] = $tanggalpembelian;
  header("Location:TPenjualan.php");
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pilih_barang.php ">'; 
}

?>
