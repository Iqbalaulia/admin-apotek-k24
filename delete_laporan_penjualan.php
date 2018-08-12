<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
    include "config.php";
    $id = $_GET['id_transaksi'];
    $query = $dbconnect->query("DELETE FROM item WHERE id_transaksi='".$id."'");

        if($query){
        	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=laporanpenjualan.php">';

      

                          
        }else{
                  ?> <script type="text/javascript"> swal("Good job!", "You clicked the button!", "success");</script>  <?php
        }
?>