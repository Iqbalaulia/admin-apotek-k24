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
  <title>Transaksi Pembelian</title>
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

  <!-- <script type="text/javascript" src="js/tpembelian.js"></script> -->
  <!-- Icon Title -->
  <link rel="shortcut icon" href="img/transactionpem.png">

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
      <li class="breadcrumb-item active">Transaksi Pembelian</li>
    </ol>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <br>
      <div class="col-md-6">
        <a data-toggle="modal" href='#modal-id'> <button type="button" class="btn btn-outline-success"> + Tambah Data</button></a>
        <div class="modal fade" id="modal-id">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

              </div>
              <div class="modal-body" >
                <form action="" method="POST">
                 <div class="form-row">
                   <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"  id="warning_kodeobat">
                     <label>Kode Obat</label>
                     <input id="kodeobat" type="text" name="kodeobat" class="form-control" maxlength="5" id="" placeholder="Kode Obat">
                   </div>
                 </div>





                 <div class="form-row">
                   <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"  id="warning_namasuplier">
                     <label>Nama Suplier</label>
                     <input id="namasuplier" type="text" name="namasuplier" class="form-control" id="" placeholder="Nama Suplier">
                   </div>
                 </div>




                 <div class="form-row">
                   <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                     <label>Nama Obat</label>

                     <input class="form-control" name="namaobat" type="text" aria-describedby="nameHelp" placeholder="Nama Obat" list="namaobat">
                     <!-- <input list="browsers" name="browser"> -->
                     <datalist id="namaobat" name="namaobat">
                       <?php 
                       include 'config.php';
                       $view = $dbconnect -> query("SELECT namaobat FROM masterbarang");
                       while ($row=$view->fetch_array()) {

                        ?>
                        <option value="<?php echo $row['namaobat']; ?>">
                          <?php  

                        }

                        ?>
                      </datalist>
                    </div>
                  </div>




                  <div class="form-row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                     <label>Tipe Obat</label>
                     <select class="form-control" id="tipeobat" name="tipeobat">
                      <option></option>
                      <option>Pulvis</option>
                      <option>Pulveres</option>
                      <option>Tablet</option>
                      <option>Pil</option>
                      <option>Kapsul</option>
                      <option>Kaplet</option>
                      <option>Larutan</option>
                      <option>Suspensi</option>
                      <option>Emulsi</option>
                      <option>Galenik</option>
                      <option>Ekstrak</option>
                      <option>Infusa</option>
                      <option>Imonoserum</option>
                      <option>Supositorian</option>
                      <option>Obat Tetes</option>
                      <option>Injeksi</option>
                    </select>
                  </div>

                  <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
                    <label>Stok Awal</label>
                    <input class="form-control" id="stokawal" name="stokawal" type="text" aria-describedby="nameHelp" placeholder="Stok Awal" ><!--  onkeypress="return validSH(event)" -->
                  </div>

                  <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
                    <label>Jumlah Barang</label>
                    <input class="form-control" id="jumlahbarang" name="jumlahbarang" type="text" aria-describedby="nameHelp" placeholder="Jumlah Obat" ><!--  onkeypress="return validSH(event)" -->
                  </div>

                </div>




                <div class="form-row">
                 <div class="col-md-6">
                   <label>Dosis Obat</label>
                   <select class="form-control" type="text" id="dosis" name="dosis">
                    <option></option>
                    <option>1.Dosis Lazim</option>
                    <option>2.Dosis Terapi</option>
                    <option>3.Dosis Minimum</option>
                    <option>4.Dosis Maksimum</option>
                    <option>5.Dosis Toksik</option>
                    <option>6.Dosis Letalis</option> 
                  </select>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                 <label>Harga Beli </label>
                 <input class="form-control" id="harga" name="harga" type="text" aria-describedby="nameHelp" placeholder="Harga Obat">  <!-- onkeypress="return validSH(event)" -->
               </div>
             </div>





             <div class="form-row">
               <div class="col-md-12">
                <label class="control-label" for="date">Tanggal Pembelian</label>
                <input type="date" class="form-control" id="tanggalpembelian" name="tanggalpembelian" placeholder="MM/DD/YYY"/>
              </div>
            </div>





            <div class="form-row">
             <div class="col-md-12">
              <label class="control-label" for="date">Tanggal Kadaluarsa</label>
              <input type="date" class="form-control" id="tanggalex" name="tanggalex" placeholder="MM/DD/YYY"/>
            </div>
          </div>



          <br>
          <input type="submit" class="btn btn-success" name="simpan" id="ajaxtpembelian" value="Simpan"></input>
          <br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<br>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Data Transaksi Pembelian</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kode Obat</th>
              <th>Nama Obat</th>
              
              <th>Nama Suplier</th>

              <th>Tipe Obat</th>
              <th>Stok Awal</th>
              <th>Stok AKhir</th>
              <th>Dosis Obat</th>
              <th>Harga Beli</th>
              <th>Tanggal Pembelian</th>
              <th>Tanggal Expired</th>

            </tr>
          </thead>
          <tfoot>
            <tr>
             <th>Kode Obat</th>
             <th>Nama Obat</th>
             
             <th>Nama Suplier</th>

             <th>Tipe Obat</th>
             <th>Stok Awal</th>
             <th>Stok Akhir</th>
             <th>Dosis Obat</th>
             <th>Harga Beli</th>
             <th>Tanggal Pembelian</th>
             <th>Tanggal Expired</th>
             
           </tr>
         </tfoot>
         <tbody>
          <?php 
          include 'config.php';
          $view = $dbconnect -> query("SELECT * FROM masterbarang");
          while ($row=$view->fetch_array()) {

            ?>
            <tr>
              <td><?php echo $row['kodeobat']; ?></td>
              <td><?php echo $row['namaobat']; ?></td>
             
              <td><?php echo $row['namasuplier']; ?></td>

              <td><?php echo $row['tipeobat']; ?></td>
              <td><?php echo $row['stokawal']; ?></td>
              <td><?php echo $row['stok']; ?></td>
              <td><?php echo $row['dosis']; ?></td>
              <td>Rp. <?php echo $row['harga']; ?></td>
              <td><?php echo $row['tanggalpembelian']; ?></td>
              <td><?php echo $row['tanggalex']; ?></td>
              <!-- <td>
                <center> -->
<!-- 
  <a class="btn btn-outline-warning fa fa-edit" href="editMbarang.php?kodeobat=<?php echo $row['kodeobat']; ?>" name="edit">Edit</a> -->


  <!-- <a class="btn btn-outline-danger fa fa-trash" onclick="delete_data('<?php echo $row['kodeobat']; ?>')" >Hapus</a> -->
  <!-- </td> -->
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




<!-- Select Master Barang -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Data Master Barang</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <!-- th>Kode Obat</th>
              <th>No Faktur</th>
              <th>Nama Suplier</th> -->
              <th>Nama Obat</th>
              <th>Tipe Obat</th>
              <th>Stok Obat</th>
              <!-- 
              <th>Dosis Obat</th>
              <th>Harga Obat</th>
              <th>Tanggal Pembelian</th>
              <th>Tanggal Expired</th> -->

            </tr>
          </thead>
          <tfoot>
            <tr>
             <!-- <th>Kode Obat</th>
             <th>No Faktur</th>
             <th>Nama Suplier</th> -->
             <th>Nama Obat</th>
             <th>Tipe Obat</th>
             <th>Stok Obat</th>
             <!-- 
             <th>Dosis Obat</th>
             <th>Harga Obat</th>
             <th>Tanggal Pembelian</th>
             <th>Tanggal Expired</th> -->

           </tr>
         </tfoot>
         <tbody>
          <?php 
          include 'config.php';
          $view = $dbconnect -> query("SELECT * FROM masterbarang");
          while ($row=$view->fetch_array()) {

            ?>
            <tr>
              <!-- <td><?php echo $row['kodeobat']; ?></td>
              <td><?php echo $row['nofaktur']; ?></td>
              <td><?php echo $row['namasuplier']; ?></td> -->
              <td><?php echo $row['namaobat']; ?></td>
              <td><?php echo $row['tipeobat']; ?></td>
              <td><?php echo $row['stok']; ?></td>
            <!--   
              <td><?php echo $row['dosis']; ?></td>
              <td>Rp. <?php echo $row['harga']; ?></td>
              <td><?php echo $row['tanggalpembelian']; ?></td>
              <td><?php echo $row['tanggalex']; ?></td> -->
              <!--             <td> -->
                <center>

                  <!-- <a class="btn btn-outline-warning fa fa-edit" href="editMbarang.php?kodeobat=<?php echo $row['kodeobat']; ?>" name="edit">Edit</a>


                    <a class="btn btn-outline-danger fa fa-trash" onclick="delete_data('<?php echo $row['kodeobat']; ?>')" >Hapus</a> -->
                    <!--    </td> -->
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
<?php
include 'config.php';
if (isset($_POST['simpan'])) {

  $kodeobat = $_POST['kodeobat'];
  $namasuplier = $_POST['namasuplier'];
  $namaobat = $_POST['namaobat'];
  $tipeobat = $_POST['tipeobat'];
  $jumlahbarang = $_POST['jumlahbarang'];
  $dosis = $_POST['dosis'];
  $harga = $_POST['harga'];
  $tanggalpembelian = $_POST['tanggalpembelian'];
  $tanggalex = $_POST['tanggalex'];


  
  $peritah = "SELECT * FROM masterbarang WHERE namaobat='$namaobat' AND tipeobat='$tipeobat'";
  $hasil = mysqli_query($dbconnect,$peritah);
  $row = mysqli_fetch_array($hasil);
  if ($row['namaobat'] == $namaobat AND $row['tipeobat']== $tipeobat) 
  {

    $jumlahbarang = $jumlahbarang + $row['stok'];
    $sql_update=mysqli_query($dbconnect, "UPDATE masterbarang SET stokawal= stokawal + '$jumlahbarang' ,stok= '$jumlahbarang' WHERE namaobat='$namaobat' AND tipeobat= '$tipeobat' ");
    if ($sql_update) {


      mysqli_query($dbconnect, "INSERT INTO laporanpembelian(kodeobat, namasuplier, namaobat, tipeobat, jumlahbarang, dosis, harga,
        tanggalpembelian, tanggalex) VALUES ('".$_POST['kodeobat']."',
        '".$_POST['namasuplier']."',
        '".$_POST['namaobat']."' ,
        '".$_POST['tipeobat']."',
        '".$_POST['jumlahbarang']."',
        '".$_POST['dosis']."',
        '".$_POST['harga']."',
        '".$_POST['tanggalpembelian']."',
        '".$_POST['tanggalex']."')");
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=TPembelian.php">';


    }
    // echo '<META HTTP-EQUIV="Refresh" Content="0; URL=TPembelian.php">';


  }else{

    $query_insert = mysqli_query($dbconnect, "INSERT INTO masterbarang(kodeobat, namasuplier, namaobat, tipeobat, stokawal, stok, dosis, harga,
      tanggalpembelian, tanggalex) VALUES ('".$_POST['kodeobat']."',
      '".$_POST['namasuplier']."',
      '".$_POST['namaobat']."' ,
      '".$_POST['tipeobat']."',
      '".$_POST['stokawal']."',
      '".$_POST['jumlahbarang']."',
      '".$_POST['dosis']."',
      '".$_POST['harga']."',
      '".$_POST['tanggalpembelian']."',
      '".$_POST['tanggalex']."')");
    // echo '<META HTTP-EQUIV="Refresh" Content="0; URL=TPembelian.php">';
    if ($query_insert) {
      mysqli_query($dbconnect, "INSERT INTO laporanpembelian(kodeobat, namasuplier, namaobat, tipeobat, jumlahbarang, dosis, harga,
        tanggalpembelian, tanggalex) VALUES ('".$_POST['kodeobat']."',
        
        '".$_POST['namasuplier']."',
        '".$_POST['namaobat']."' ,
        '".$_POST['tipeobat']."',
        '".$_POST['jumlahbarang']."',
        '".$_POST['dosis']."',
        '".$_POST['harga']."',
        '".$_POST['tanggalpembelian']."',
        '".$_POST['tanggalex']."')");
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=TPembelian.php">';
    }
  }

}

?>