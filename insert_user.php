<?php
$servername = "localhost";
$username = "root";
$password = "sepatusandal12";
$dbname ="uaspweb";
sleep(5);
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create connection

// if (!empty($_POST)) {
    
//     $kodeobat = mysqli_real_escape_string($conn, $_POST['kodeobat']);
//     $namaobat = mysqli_real_escape_string($conn, $_POST['namaobat']);
//     $tipeobat = mysqli_real_escape_string($conn, $_POST['tipeobat']);
//     $stok = mysqli_real_escape_string($conn, $_POST['stok']);
//     $satuan = mysqli_real_escape_string($conn, $_POST['satuan']);
//     $harga = mysqli_real_escape_string($conn, $_POST['harga']);
//     $tanggalex = mysqli_real_escape_string($conn, $_POST['tanggalex']);

//     $query = "INSERT INTO masterbarang(kodeobat,namaobat,tipeobat,stok,satuan,harga,tanggalex) VALUES 
//     ('$kodeobat','$namaobat','$tipeobat','$stok','$satuan','$harga','$tanggalex')";
// }
  $password = $_POST['password'];
  // $passwordMD5 = md5($password);
  $id = rand(999,90000);

  $sql = "INSERT INTO masteruser(id,
  username, password, namalengkap, level, email, telepon, tanggal) VALUES (
  '".$id."',
  '".$_POST['username']."',
  '".$password."',
  '".$_POST['namalengkap']."', 
  '".$_POST['level']."',
  '".$_POST['email']."',
  '".$_POST['telepon']."',
  '".$_POST['tanggal']."')";
	
	// $sql = "INSERT INTO `masterbarang`(`kodeobat`, `namaobat`, `tipeobat`, `stok`, `satuan`, `harga`, `tanggalex`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])"

	
  if ($conn->query($sql) === TRUE) {
    echo "1";
  } else {
    echo "</br>";
    echo "query gagal terinput";
  }


?>
