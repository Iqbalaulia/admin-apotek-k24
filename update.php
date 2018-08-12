
<?php 

// print_r($_POST['id']);
// die();
 include 'config.php';
 
  $SQL = $dbconnect->prepare("UPDATE masterbarang SET 
	  
	   namasuplier='".$_POST['namasuplier']."',
  	  namaobat='".$_POST['namaobat']."', 
  	  tipeobat='".$_POST['tipeobat']."', 
      stokawal='".$_POST['stokawal']."', 
  	  stok='".$_POST['stok']."', 
  	  dosis='".$_POST['dosis']."', 
  	  harga='".$_POST['harga']."',
      hargajual='".$_POST['hargajual']."',
  	  tanggalpembelian='".$_POST['tanggalpembelian']."', 
  	  tanggalex='".$_POST['tanggalex']."' WHERE kodeobat='".$_POST['kodeobat']."'");

  
  if ($SQL->execute()) {
  		echo "1";
  }else{
  	echo "0";
  }
  
  
?>	
