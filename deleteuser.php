<?php
    include "config.php";
    $username = $_POST['username'];
    $query = $dbconnect->query("DELETE FROM masteruser WHERE username='".$username."'");

        if($query){

        
                          
        }else{
                echo "Data Gagal Dihapus. <a href='index.php'>Kembali ke halaman sebelumnya</a>";
        }
?>