
 // Insert data

 $(document).ready(function(){

  $("#kodeobat").keyup(function() {
    var kodeobat = $("#kodeobat").val();
    if(kodeobat.length < 5){
      $("#kodeobat").css("border"," 1px solid #EC644B");
    }else{
      $("#kodeobat").css("border","1px solid #00B16A");
    }
  });

  $("#ajaxtpembelian").click(function(){

    validasi2();
  });

});

 function validasi2(){
  var kodeobat = $("#kodeobat").val();
  var nofaktur = $("#nofaktur").val();
  var namasuplier = $("#namasuplier").val();
  var namaobat = $("#namaobat").val();
  var tipeobat = $("#tipeobat").val();
  var stok = $("#jumlahbarang").val();
  var dosis = $("#dosis").val();
  var harga  = $("#harga").val();
  var tanggalpembelian = $("#tanggalpembelian").val();
  var tanggalex = $("#tanggalex").val();
  var is_validate=1;

  if (kodeobat == "") {
    $("#kodeobat").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#kodeobat").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (nofaktur == "") {
    $("#nofaktur").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#nofaktur").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (namasuplier == "") {
    $("#namasuplier").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#namasuplier").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (namaobat == "") {
    $("#namaobat").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#namaobat").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (tipeobat == "") {
    $("#tipeobat").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#tipeobat").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (stok == "") {
    $("#jumlahbarang").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#jumlahbarang").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (dosis == "") {
    $("#dosis").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#dosis").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (harga == "") {
    $("#harga").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#harga").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (tanggalpembelian == "") {
    $("#tanggalpembelian").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#tanggalpembelian").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (tanggalex == "") {
    $("#tanggalex").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#tanggalex").css("border","1px solid #00B16A");
    is_validate=1;
  }


    // validasi insert data 
    if (is_validate==1) {
      insert_data();
    }else{
      swal("Data kurang lengkap!", "mohon diisi datanya", "error");
    }
  }

  // validasi inputan hanya angka pada Stok dan Harga
  function validSH(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}


    //Insert data  
    function insert_data(){
        // $("#loading").modal('show');
        var kodeobat = $("#kodeobat").val();
        var nofaktur = $("#nofaktur").val();
        var namasuplier = $("#namasuplier").val();
        var namaobat = $("#namaobat").val();
        var tipeobat = $("#tipeobat").val();
        var stok = $("#stok").val();
        var dosis = $("#dosis").val();
        var harga  = $("#harga").val();
        var tanggalpembelian = $("#tanggalpembelian").val();
        var tanggalex = $("#tanggalex").val();
        $.ajax({
          type: "POST",
          dataType: 'html',
          url: "http://localhost/website/uasPWEB/insert.php",
          data: "kodeobat=" + kodeobat +"&nofaktur=" + nofaktur  +"&namasuplier=" + namasuplier +
          "&namaobat=" + namaobat + "&tipeobat=" + tipeobat + "&stok=" + stok 
          + "&dosis=" + dosis + "&harga=" + harga +"&tanggalpembelian="  + tanggalpembelian  +
           "&tanggalex=" + tanggalex ,
          success: function(res) {
            if(res=0){

            }else{
             swal("Good job!", "You clicked the button!", "success");
             setTimeout(
              function() 
              {
                location.reload();//do something special
              }, 1000);
           }
            // $("#kota").html(res);
            
          },
          error: function() {
            alert("insert gagal");
          }
        });

      }



    // Delete Data 

    function delete_data(kodeobat){

      $.ajax({
        type: "POST",
        dataType: 'html',
        url: "http://localhost/website/uasPWEB/delete.php",
        data: "kodeobat=" + kodeobat  ,
        success: function(res) {

          swal("Good job!", "You clicked the button!", "success");
          setTimeout(
            function() 
            {
                location.reload();//do something special
              }, 2000);

        },
        error: function() {
          alert("insert gagal");
        }
      });

    }

    
    // Update Data
