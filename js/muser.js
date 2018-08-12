
 // Insert data

 $(document).ready(function(){

  $("#ajaxuser").click(function(){

    validasi2();
  });

});

 function validasi2(){
  // var id = $("#id").val();
  var username = $("#username").val();
  var password = $("#password").val();
  var namalengkap = $("#namalengkap").val();
  var level = $("#level").val();
  var email = $("#email").val();
  var telepon = $("#telepon").val();
  var tanggal = $("#tanggal").val();

  var is_validate=1;

  // if (id == "") {
  //   $("#id").css("border"," 1px solid #EC644B");
  //   is_validate=0;
  // }else{
  //   $("#id").css("border","1px solid #00B16A");
  //   is_validate=1;
  // }
  if (username == "") {
    $("#username").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#username").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (password == "") {
    $("#password").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#password").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (namalengkap == "") {
    $("#namalengkap").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#namalengkap").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (level == "") {
    $("#level").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#level").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (email == "") {
    $("#email").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#email").css("border","1px solid #00B16A");
    is_validate=1;
  }
  if (telepon == "") {
    $("#telepon").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#telepon").css("border","1px solid #00B16A");
    is_validate=1;
  }
   if (tanggal == "") {
    $("#tanggal").css("border"," 1px solid #EC644B");
    is_validate=0;
  }else{
    $("#tanggal").css("border","1px solid #00B16A");
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
  function validtelp(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}


    //Insert data  
    function insert_data(){
        // $("#loading").modal('show');
       // var id = $("#id").val();
  var username = $("#username").val();
  var password = $("#password").val();
  var namalengkap = $("#namalengkap").val();
  var level = $("#level").val();
  var email = $("#email").val();
  var telepon = $("#telepon").val();
  var tanggal = $("#tanggal").val();
        $.ajax({
          type: "POST",
          dataType: 'html',
          url: "http://localhost/website/uasPWEB/insert_user.php",
          data: "username=" + username + "&password=" + password + "&namalengkap=" + namalengkap
          + "&level=" + level + "&email=" + email + "&telepon=" + telepon + "&tanggal=" + tanggal  ,
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

      function delete_data(username){

        $.ajax({
          type: "POST",
          dataType: 'html',
          url: "http://localhost/website/uasPWEB/deleteuser.php",
          data: "username=" + username  ,
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
