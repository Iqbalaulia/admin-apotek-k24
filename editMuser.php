
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Edit Master User</title>
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
				<li class="breadcrumb-item active">Master User</li>
				<li class="breadcrumb-item active">Edit Master User</li>
			</ol>
			
			<div class="card mb-3" style="width: 60%;margin: 0% 20% 20% 20%; padding: 1%">
				
				<?php ;
				include 'config.php';
				$username = $_GET['username'];
				$view = $dbconnect -> query("SELECT * FROM masteruser WHERE username = '$username' ");
				while ($row=$view->fetch_array()) {

					?>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"  id="warning_kodeobat">
								<br>
								<label>Username</label>
								<input id="username" type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
							</div>

							<div class="col-md-8 col-sm-8 col-lg-8 col-xs-8">
								<br>
								<label>Password</label>
								<input class="form-control" id="password" name="password" type="text" aria-describedby="nameHelp" value="<?php echo $row['password']; ?>">
							</div>

						</div>
					</div>
					<!--  -->
					<div class="form-group" id="warning_tipeobat">
						<div class="form-row">
							<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
								<label>Nama Lengkap</label>
								<input class="form-control" id="namalengkap" name="namalengkap" type="text" aria-describedby="nameHelp" placeholder="Nama Lengkap" value="<?php echo $row['namalengkap']; ?>">
							</div>
						</div>
					</div>
					<div class="form-group" id="warning_SH">
						<div class="form-row">
							<div class="col-md-6">
								<label>Email</label>
								<input class="form-control" id="email" name="email" type="text" aria-describedby="nameHelp" placeholder="Email" value="<?php echo $row['email'];?>">
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
								<label>Telepon</label>
								<input class="form-control" id="telepon" name="telepon" type="text" aria-describedby="nameHelp" placeholder="Telepon" onkeypress="return validtelp(event)" value="<?php echo $row['telepon']; ?>">
							</div>
						</div>
					</div>
					<div class="form-group" id="warning_tanggal">
						<div class="form-row">
							<div class="col-md-12">
								<label class="control-label" for="date">Tanggal Kadaluarsa</label>
								<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $row['tanggal']; ?>" />
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

		var username = $("#username").val();
		var password = $("#password").val();
		var namalengkap = $("#namalengkap").val();
		var email = $("#email").val();
		var telepon = $("#telepon").val();
		var tanggal  = $("#tanggal").val();
		
		$.ajax({
			type: "POST",
			dataType: 'html',
			url: "http://localhost/website/uasPWEB/update_user.php",
			data: "username=" + username + "&password=" + password + "&namalengkap=" + namalengkap + "&email=" + email + "&telepon=" + telepon + "&tanggal=" + tanggal,
			success: function(res) {


				console.log(res);
				if(res=0){

				}else{
					swal("Good job!", "You clicked the button!", "success");
					setTimeout(
						function() 
						{
               window.location = "Muser.php";
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