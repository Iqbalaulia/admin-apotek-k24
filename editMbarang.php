
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Edit Master Barang</title>
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

	
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<script type="text/javascript" src="js/mbarang.js"></script>
</head>
<body>
	<?php
	include 'navbar.php';
	?>
	
	<div class="content-wrapper">
		<div class="container-fluid">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#">Dashboard</a>
				</li>
				<li class="breadcrumb-item active">Master Barang</li>
				<li class="breadcrumb-item active">Edit Master Barang</li>
			</ol>
			
			<div class="card mb-3" style="width: 60%;margin: 0% 20% 20% 20%; padding: 1%">
				
				<?php ;
				include 'config.php';
				$kodeobat = $_GET['kodeobat'];
				$view = $dbconnect -> query("SELECT * FROM masterbarang WHERE kodeobat = '$kodeobat' ");
				while ($row=$view->fetch_array()) {

					?>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"  id="warning_kodeobat">
								<br>
								<label>Kode Obat</label>
								<input id="kodeobat" type="text" name="kodeobat" class="form-control" maxlength="5" value="<?php echo $row['kodeobat']; ?>">
							</div>

						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
								<br>
								<label>Nama Suplier</label>
								<input class="form-control" id="namasuplier" name="namasuplier" type="text" aria-describedby="nameHelp" value="<?php echo $row['namasuplier']; ?>">
							</div>

							<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"  id="warning_kodeobat">
								<br>
								<label>Nama Obat</label>
								<input id="namaobat" type="text" name="namaobat" class="form-control" value="<?php echo $row['namaobat']; ?>">
							</div>
						</div>
					</div>
					<!--  -->
					<div class="form-group" id="warning_tipeobat">
						<div class="form-row">
							<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
								<label>Tipe Obat</label>
								<select class="form-control" id="tipeobat" name="tipeobat" value="">
									<option><?php echo $row['tipeobat']; ?></option>
									<option>1.Pulvis</option>
									<option>2.Pulveres</option>
									<option>3.Tablet</option>
									<option>4.Pil</option>
									<option>5.Kapsul</option>
									<option>6.Kaplet</option>
									<option>7.Larutan</option>
									<option>8.Suspensi</option>
									<option>9.Emulsi</option>
									<option>10.Galenik</option>
									<option>11.Ekstrak</option>
									<option>12.Infusa</option>
									<option>13.Imonoserum</option>
									<option>14.Supositorian</option>
									<option>15.Obat Tetes</option>
									<option>16.Injeksi</option>
								</select>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
								<label>Stok Awal</label>
								<input class="form-control" id="stokawal" name="stokawal" type="text" aria-describedby="nameHelp" placeholder="Stok Obat" onkeypress="return validSH(event)" value="<?php echo $row['stokawal']; ?>">
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
								<label>Stok Akhir</label>
								<input class="form-control" id="stok" name="stok" type="text" aria-describedby="nameHelp" placeholder="Stok Obat" onkeypress="return validSH(event)" value="<?php echo $row['stok']; ?>">
							</div>
						</div>
					</div>
					<div class="form-group" id="warning_SH">
						<div class="form-row">
							<div class="col-md-4">
								<label>Dosis Obat</label>
								<select class="form-control" id="dosis" name="dosis">
									<option><?php echo $row['dosis']; ?></option>
									<option>1.Dosis Lazim</option>
									<option>2.Dosis Terapi</option>
									<option>3.Dosis Minimum</option>
									<option>4.Dosis Maksimum</option>
									<option>5.Dosis Toksik</option>
									<option>6.Dosis Letalis</option> 
								</select>
							</div>

							<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
								<label>Harga Beli</label>
								<input class="form-control" id="harga" name="harga" type="text" aria-describedby="nameHelp" placeholder="Harga Beli" onkeypress="return validSH(event)" value="<?php echo $row['harga']; ?>">
							</div>

							<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
								<label>Harga Jual</label>
								<input class="form-control" id="hargajual" name="hargajual" type="text" aria-describedby="nameHelp" placeholder="Harga Jual" onkeypress="return validSH(event)" value="<?php echo $row['hargajual']; ?>">
							</div>
						</div>
					</div>
					<div class="form-group" id="warning_tanggalpembelian">
						<div class="form-row">
							<div class="col-md-12">
								<label class="control-label" for="date">Tanggal Pembelian</label>
								<input type="date" class="form-control" id="tanggalpembelian" name="tanggalpembelian" value="<?php echo $row['tanggalpembelian']; ?>" />
							</div>
						</div>
					</div>
					<div class="form-group" id="warning_tanggal">
						<div class="form-row">
							<div class="col-md-12">
								<label class="control-label" for="date">Tanggal Kadaluarsa</label>
								<input type="date" class="form-control" id="tanggalex" name="tanggalex" value="<?php echo $row['tanggalex']; ?>" />
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-success" name="simpan" id="update_button" value="Simpan Perubahan"></input>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$("#update_button").click(function(){
		update_data();
	});

	function update_data(){

		var kodeobat = $("#kodeobat").val();
		var namasuplier = $("#namasuplier").val();
		var namaobat = $("#namaobat").val();
		var tipeobat = $("#tipeobat").val();
		var stokawal = $("#stokawal").val();
		var stok = $("#stok").val();
		var dosis = $("#dosis").val();
		var harga  = $("#harga").val();
		var hargajual  = $("#hargajual").val();
		var tanggalpembelian = $("#tanggalpembelian").val();
		var tanggalex = $("#tanggalex").val();
		$.ajax({
			type: "POST",
			dataType: 'html',
			url: "http://localhost/website/uasPWEB/update.php",
			data: "kodeobat=" + kodeobat +
			"&namasuplier=" + namasuplier +
			"&namaobat=" + namaobat + 
			"&tipeobat=" + tipeobat +
			"&stokawal=" + stokawal + 
			"&stok=" + stok + 
			"&dosis=" + dosis + 
			"&harga=" + harga +
			"&hargajual=" + hargajual +
			"&tanggalpembelian="  + tanggalpembelian  +
			"&tanggalex=" + tanggalex,
			success: function(res) {


				console.log(res);
				if(res=0){

				}else{
					swal("Kerja Bagus!", "Data Berhasil di Update", "success");
					setTimeout(
						function() 
						{
							window.location = "MBarang.php";
;//do something special
}, 1000);
				}
            // $("#kota").html(res);
            
        },
        error: function() {
        	alert("insert gagal");
        }
    });

	}


</script>