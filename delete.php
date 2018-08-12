<?php
    include "config.php";
    $kodeobat = $_POST['kodeobat'];
    $query = $dbconnect->query("DELETE FROM masterbarang WHERE kodeobat='".$kodeobat."'");

        if($query){

        
                          
        }else{
                echo "Data Gagal Dihapus. <a href='index.php'>Kembali ke halaman sebelumnya</a>";
        }
?>