<?php 
session_start();
include 'config.php';
if (empty($_SESSION['level'])) {
	header("location:login.php");
}else { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>APOTIK K24</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="index.php"><?php echo $_SESSION['level']; ?></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				


				<!-- Dashboard -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
					<a class="nav-link" href="index.php">
						<i class="fa fa-fw fa-dashboard"></i>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>
				


				<!-- ================================================================== -->
				<!-- akses kasir -->
				<?php if($_SESSION['level'] == 'Kasir'){?>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
					<a class="nav-link" href="charts.php">
						<i class="fa fa-fw fa-area-chart"></i>
						<span class="nav-link-text">Charts</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="TPembelian.php">
						<i class="fa fa-fw fa-dollar"></i>
						<span class="nav-link-text">Transaksi Pembelian</span>
					</a>
				</li>				
				<!-- Transaksi Pemnjualan -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="TPenjualan.php">
						<i class="fa fa-fw fa-dollar"></i>
						<span class="nav-link-text">Transaksi Penjualan</span>
					</a>
				</li>
				<!-- Laporan Penjualan -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanpenjualan.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Penjualan</span>
					</a>
				</li>

				<!-- Laporan Pembelian -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanpembelian.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Pembelian</span>
					</a>
				</li>


				<!-- Gudang -->
				<?php }elseif ($_SESSION['level'] == 'Gudang') { ?>				
				<!-- ================================================================== -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanstok.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Stok Obat</span>
					</a>
				</li>


				<?php }elseif ($_SESSION['level'] == 'Kepala') {?>
				<!-- ================================================================== -->

				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanstok.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Stok Obat</span>
					</a>
				</li>
				<!-- Laporan Pembelian -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanpembelian.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Pembelian</span>
					</a>
				</li>
				<!-- Laporan Penjualan -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanpenjualan.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Penjualan</span>
					</a>
				</li>

				<?php }else{ ?>	
				<!-- ================================================================== -->
				<!-- Chart Analisa -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
					<a class="nav-link" href="charts.php">
						<i class="fa fa-fw fa-area-chart"></i>
						<span class="nav-link-text">Charts</span>
					</a>
				</li>

				<!-- Master Barang -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="MBarang.php">
						<i class="fa fa-fw fa-table"></i>
						<span class="nav-link-text">Master Barang</span>
					</a>
				</li>
				
				<!-- Master User -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="Muser.php">
						<i class="fa fa-fw fa-table"></i>
						<span class="nav-link-text">Master User</span>
					</a>
				</li>
				
				<!-- Transaksi Pembelian -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="TPembelian.php">
						<i class="fa fa-fw fa-dollar"></i>
						<span class="nav-link-text">Transaksi Pembelian</span>
					</a>
				</li>
				
				<!-- Transaksi Pemnjualan -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="TPenjualan.php">
						<i class="fa fa-fw fa-dollar"></i>
						<span class="nav-link-text">Transaksi Penjualan</span>
					</a>
				</li>
				
				<!-- Laporan Stok Obat -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanstok.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Stok Obat</span>
					</a>
				</li>
				

				<!-- Laporan Pembelian -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanpembelian.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Pembelian</span>
					</a>
				</li>

				<!-- Laporan Penjualan -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="laporanpenjualan.php">
						<i class="fa fa-fw fa-archive"></i>
						<span class="nav-link-text">Laporan Penjualan</span>
					</a>
				</li>
				<?php } ?>
			</ul>

			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-envelope"></i>
						<span class="d-lg-none">Messages
							<span class="badge badge-pill badge-primary">12 New</span>
						</span>
						<span class="indicator text-primary d-none d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="messagesDropdown">
						<h6 class="dropdown-header">New Messages:</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<strong>David Miller</strong>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<strong>Jane Smith</strong>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<strong>John Doe</strong>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item small" href="#">View all messages</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-bell"></i>
						<span class="d-lg-none">Alerts
							<span class="badge badge-pill badge-warning">6 New</span>
						</span>
						<span class="indicator text-warning d-none d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="alertsDropdown">
						<h6 class="dropdown-header">New Alerts:</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="text-success">
								<strong>
									<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
								</span>
								<span class="small float-right text-muted">11:21 AM</span>
								<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">
								<span class="text-danger">
									<strong>
										<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
									</span>
									<span class="small float-right text-muted">11:21 AM</span>
									<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									<span class="text-success">
										<strong>
											<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
										</span>
										<span class="small float-right text-muted">11:21 AM</span>
										<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item small" href="#">View all alerts</a>
								</div>
							</li>
							<li class="nav-item">
								<form class="form-inline my-2 my-lg-0 mr-lg-2">
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Search for...">
										<span class="input-group-append">
											<button class="btn btn-success" type="button">
												<i class="fa fa-search"></i>
											</button>
										</span>
									</div>
								</form>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="modal" data-target="#modalogout">
									<i class="fa fa-fw fa-sign-out"></i>Logout</a>
								</li>
							</ul>
						</div>
					</nav>

					<!-- Modal Logout -->
					<div class="modal fade" id="modalogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Logout?</h5>
									<button class="close" type="button" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">Selamat tinggal , semoga hari -  harimu menyenangkan !</div>
								<div class="modal-footer">
									<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
									<a class="btn btn-danger" href="logout.php">Logout</a>
								</div>
							</div>
						</div>
					</div>
				</body>
				</html>
				<?php } ?>
