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
  <title>APOTEK K24</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Icon Title -->
  <link rel="shortcut icon" href="img/dashboard.png">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php
  include 'navbar.php';
  ?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">
            </a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">

          <!-- Pemberian Akses Untuk User -->
          <?php 
          include 'config.php';
          session_start();

          
          if ($_SESSION['level'] == 'Kasir') {?>
          <!-- Kotak User -->
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-users"></i>
                </div>
                <h3>Data User</h3>
                <div class="mr-5">
                  <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(username) FROM masteruser");      
                    while($row=$view->fetch_array()){   
                    ?>
                  <p>
                    <?php echo"".$row['COUNT(username)'] ;""; ?> Orang</p>
                  <?php  
                    } 
                    ?>
                </div>
              </div>
              <!-- <a class="card-footer text-white clearfix small z-1" href="Muser.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
            </div>
          </div>

          <!-- Kotak Master Barang -->
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-cubes"></i>
                </div>
                <h3>Data Obat</h3>
                <div class="mr-5">
                  <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM masterbarang");      

                    while($row=$view->fetch_array()){   
                    ?>

                  <p> Jumlah
                    <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

                  <?php  
                    } 
                    ?>
                </div>
              </div>
              <!-- <a class="card-footer text-white clearfix small z-1" href="MBarang.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
            </div>
          </div>

          <!-- Kotak Laporan Pembelian -->
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-cart-plus"></i>
                </div>
                <h3>Data laporan pembelian</h3>
                <div class="mr-5">
                  <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM laporanpembelian");      

                    while($row=$view->fetch_array()){   
                    ?>

                  <p> Jumlah
                    <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

                  <?php  
                    } 
                    ?>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="laporanpembelian.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <!-- Kotak Laporan Penjualan -->
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-bag"></i>
                </div>
                <h3>Data Laporan Penjualan</h3>
                <div class="mr-5">
                  <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(jumlahbarang) FROM item");      

                    while($row=$view->fetch_array()){   
                    ?>

                  <p> Jumlah
                    <?php echo"".$row['SUM(jumlahbarang)'] ;""; ?> Obat Terjual</p>

                  <?php  
                    } 
                    ?>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="laporanpenjualan.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <!-- Kotak Laporan Stok Obat -->
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-bag"></i>
                </div>
                <h3>Data Laporan Stok</h3>
                <div class="mr-5">
                  <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(stok) FROM masterbarang");       
                    while($row=$view->fetch_array()){   
                    ?>

                  <p> Total
                    <?php echo"".$row['SUM(stok)'] ;""; ?> Stok Obat</p>

                  <?php  
                    } 
                    ?>
                </div>
              </div>
              <!-- <a class="card-footer text-white clearfix small z-1" href="laporanstok.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
            </div>
          </div>

          <!-- Kotak Laporan Keuntungan -->
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-money"></i>
                </div>
                <h3>Laporan Keuntungan</h3>
                <div class="mr-5">
                  Jangan lupa dipantau!
                </div>
              </div>
              <!-- <a class="card-footer text-white clearfix small z-1" href="laporankeuntungan.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
            </div>
          </div>
        </div>

        <?php } else if ($_SESSION['level'] == 'Gudang') { ?>
        <!-- Kotak User -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <h3>Data User</h3>
              <div class="mr-5">
                <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(username) FROM masteruser");      

                    while($row=$view->fetch_array()){   
                    ?>

                <p>
                  <?php echo"".$row['COUNT(username)'] ;""; ?> Orang</p>

                <?php  
                    } 
                    ?>
              </div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="Muser.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
          </div>
        </div>

        <!-- Kotak Master Barang -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-cubes"></i>
              </div>
              <h3>Data Obat</h3>
              <div class="mr-5">
                <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM masterbarang");      

                    while($row=$view->fetch_array()){   
                    ?>

                <p> Jumlah
                  <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

                <?php  
                    } 
                    ?>
              </div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="MBarang.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
          </div>
        </div>

        <!-- Kotak Laporan Pembelian -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-cart-plus"></i>
              </div>
              <h3>Data laporan pembelian</h3>
              <div class="mr-5">
                <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM laporanpembelian");      

                    while($row=$view->fetch_array()){   
                    ?>

                <p> Jumlah
                  <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

                <?php  
                    } 
                    ?>
              </div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="laporanpembelian.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
          </div>
        </div>

        <!-- Kotak Laporan Penjualan -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-bag"></i>
              </div>
              <h3>Data Laporan Penjualan</h3>
              <div class="mr-5">
                <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(jumlahbarang) FROM item");      

                    while($row=$view->fetch_array()){   
                    ?>

                <p> Jumlah
                  <?php echo"".$row['SUM(jumlahbarang)'] ;""; ?> Obat Terjual</p>

                <?php  
                    } 
                    ?>
              </div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="laporanpenjualan.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
          </div>
        </div>

        <!-- Kotak Laporan Stok Obat -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-bag"></i>
              </div>
              <h3>Data Laporan Stok</h3>
              <div class="mr-5">
                <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(stok) FROM masterbarang");       
                    while($row=$view->fetch_array()){   
                    ?>

                <p> Total
                  <?php echo"".$row['SUM(stok)'] ;""; ?> Stok Obat</p>

                <?php  
                    } 
                    ?>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="laporanstok.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <!-- Kotak Laporan Keuntungan -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <h3>Laporan Keuntungan</h3>
              <div class="mr-5">
                Jangan lupa dipantau!
              </div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="laporankeuntungan.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
          </div>
        </div>
      </div>

      <?php } else if ($_SESSION['level'] == 'Kepala') { ?>

      <!-- Kotak User -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-users"></i>
            </div>
            <h3>Data User</h3>
            <div class="mr-5">
              <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(username) FROM masteruser");      

                    while($row=$view->fetch_array()){   
                    ?>

              <p>
                <?php echo"".$row['COUNT(username)'] ;""; ?> Orang</p>

              <?php  
                    } 
                    ?>
            </div>
          </div>
          <!-- <a class="card-footer text-white clearfix small z-1" href="Muser.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
        </div>
      </div>

      <!-- Kotak Master Barang -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-cubes"></i>
            </div>
            <h3>Data Obat</h3>
            <div class="mr-5">
              <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM masterbarang");      

                    while($row=$view->fetch_array()){   
                    ?>

              <p> Jumlah
                <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

              <?php  
                    } 
                    ?>
            </div>
          </div>
          <!-- <a class="card-footer text-white clearfix small z-1" href="MBarang.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a> -->
        </div>
      </div>

      <!-- Kotak Laporan Pembelian -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-cart-plus"></i>
            </div>
            <h3>Data laporan pembelian</h3>
            <div class="mr-5">
              <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM laporanpembelian");      

                    while($row=$view->fetch_array()){   
                    ?>

              <p> Jumlah
                <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

              <?php  
                    } 
                    ?>
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="laporanpembelian.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <!-- Kotak Laporan Penjualan -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-shopping-bag"></i>
            </div>
            <h3>Data Laporan Penjualan</h3>
            <div class="mr-5">
              <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(jumlahbarang) FROM item");      

                    while($row=$view->fetch_array()){   
                    ?>

              <p> Jumlah
                <?php echo"".$row['SUM(jumlahbarang)'] ;""; ?> Obat Terjual</p>

              <?php  
                    } 
                    ?>
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="laporanpenjualan.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <!-- Kotak Laporan Stok Obat -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-shopping-bag"></i>
            </div>
            <h3>Data Laporan Stok</h3>
            <div class="mr-5">
              <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(stok) FROM masterbarang");       
                    while($row=$view->fetch_array()){   
                    ?>

              <p> Total
                <?php echo"".$row['SUM(stok)'] ;""; ?> Stok Obat</p>

              <?php  
                    } 
                    ?>
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="laporanstok.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <!-- Kotak Laporan Keuntungan -->
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-money"></i>
            </div>
            <h3>Laporan Keuntungan</h3>
            <div class="mr-5">
              Jangan lupa dipantau!
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="laporankeuntungan.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>

    <?php } else if ($_SESSION['level'] == 'Manager') { ?>

    <!-- Kotak User -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-users"></i>
          </div>
          <h3>Data User</h3>
          <div class="mr-5">
            <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(username) FROM masteruser");      

                    while($row=$view->fetch_array()){   
                    ?>

            <p>
              <?php echo"".$row['COUNT(username)'] ;""; ?> Orang</p>

            <?php  
                    } 
                    ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="Muser.php">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Kotak Master Barang -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-cubes"></i>
          </div>
          <h3>Data Obat</h3>
          <div class="mr-5">
            <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM masterbarang");      

                    while($row=$view->fetch_array()){   
                    ?>

            <p> Jumlah
              <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

            <?php  
                    } 
                    ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="MBarang.php">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Kotak Laporan Pembelian -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-cart-plus"></i>
          </div>
          <h3>Data laporan pembelian</h3>
          <div class="mr-5">
            <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT COUNT(namaobat) FROM laporanpembelian");      

                    while($row=$view->fetch_array()){   
                    ?>

            <p> Jumlah
              <?php echo"".$row['COUNT(namaobat)'] ;""; ?> Obat</p>

            <?php  
                    } 
                    ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="laporanpembelian.php">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Kotak Laporan Penjualan -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-shopping-bag"></i>
          </div>
          <h3>Data Laporan Penjualan</h3>
          <div class="mr-5">
            <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(jumlahbarang) FROM item");      

                    while($row=$view->fetch_array()){   
                    ?>

            <p> Jumlah
              <?php echo"".$row['SUM(jumlahbarang)'] ;""; ?> Obat Terjual</p>

            <?php  
                    } 
                    ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="laporanpenjualan.php">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Kotak Laporan Stok Obat -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-shopping-bag"></i>
          </div>
          <h3>Data Laporan Stok</h3>
          <div class="mr-5">
            <?php 
                    include 'config.php';
                    $view = $dbconnect -> query ("SELECT SUM(stok) FROM masterbarang");       
                    while($row=$view->fetch_array()){   
                    ?>

            <p> Total
              <?php echo"".$row['SUM(stok)'] ;""; ?> Stok Obat</p>

            <?php  
                    } 
                    ?>
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="laporanstok.php">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <!-- Kotak Laporan Keuntungan -->
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-money"></i>
          </div>
          <h3>Laporan Keuntungan</h3>
          <div class="mr-5">
            Jangan lupa dipantau!
          </div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="laporankeuntungan.php">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    </div>

    <?php  
  }
    
          ?>

    <!-- Area Chart Example-->

    <div class="row">
      <div class="col-lg-8">

      </div>
      <div class="col-lg-4">
        <!-- Example Pie Chart Card-->

        <!-- Example Notifications Card-->

      </div>
    </div>
    <!-- Example DataTables Card-->

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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    </div>
</body>

</html>
