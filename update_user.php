
<?php 

// print_r($_POST['id']);
// die();
 include 'config.php';
 
  $SQL = $dbconnect->prepare("UPDATE masteruser SET password='".$_POST['password']."', namalengkap='".$_POST['namalengkap']."', email='".$_POST['email']."', telepon='".$_POST['telepon']."', tanggal
  	='".$_POST['tanggal']."' WHERE username='".$_POST['username']."'");

  
  if ($SQL->execute()) {
  		echo "1";
  }else{
  	echo "0";
  }
  
  
?>	
