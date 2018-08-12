<?php 

include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administrator</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">

  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Icon Title -->
  <link rel="shortcut icon" href="img/privacy.png">
</head>

<body class="bg-white">
 <div class="container">
     <!--  <form action="" method="POST">

        <label for="exampleInputEmail1">Email address</label>
        <input class="form-control" name="username" id="username" type="username" aria-describedby="emailHelp" placeholder="username">


        <label for="exampleInputPassword1">Password</label>
        <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">


        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember Password</label>
          </div>

          <input class="btn btn-success btn-block" name="submit" type = "submit" value = "Login"/><br />
        </form> -->

        <form action="" method="post" autocomplete="off" class="form">
          <div class="ctn-img-title-login">
            <img src="https://cdn4.iconfinder.com/data/icons/ios-web-user-interface-multi-circle-flat-vol-7/512/Lock_protected_safe_privacy_password_security-512.png" alt="Login" title="Login" class="img-login">
            <h1 class="title-form-login">
              APOTEK K24
            </h1>
          </div>

          <div class="ctn-input">
            <label for="user" class="support-text">
              Username
            </label>
            <input type="text" id="username" name="username" class="effect-input" minlength="2" maxlength="100" autocomplete="off" required="required">
            <span class="bar">
              <i class="fa fa-times clear-input" aria-hidden="true"></i>
            </span>
          </div>

          <div class="ctn-input">
            <label for="pass" class="support-text">
              Password
            </label>
            <input type="password" name="password" id="password" class="effect-input password" minlength="5" maxlength="100" autocomplete="off" required="required">
            <span class="bar">
              <i class="fa fa-times clear-input" aria-hidden="true"></i>
              <i class="fa fa-eye-slash eye" aria-hidden="true"></i>
            </span>
          </div>

          <div class="ctn-btns">
            <input type="reset" id="reset-inputs" class="btns" value="Reset">
             <input class="btns" name="submit" type = "submit" value = "Login"/><br />
          </div>

        </form>
        
        <!-- Login Script -->
        <?php 
        include 'config.php';
        if (isset($_POST['submit'])) {
          $user = $_POST['username'];
          $pass = $_POST['password'];
          $data_user = mysqli_query($dbconnect, "SELECT * FROM masteruser WHERE username = '$user' AND password = '$pass' ");
          $row  = mysqli_fetch_array($data_user);
          $username = $row['username'];
          $password = $row['password'];
          $level = $row['level'];
          if ($user == $username && $pass == $password) {
            session_start();
            $_SESSION['level'] = $level;
            

            header("location:index.php");
          }else{
            ?> <script type="text/javascript">
              
              swal("Username atau Password anda salah!", "Isi dengan benar", "error");
            </script> <?php
          }
        }

        ?>
      
    
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
  
  $('.effect-input').on('focus', function() {
    $(this).siblings('.support-text, .bar').addClass('active-input');
  });
  
  $('.effect-input').on('keydown keyup', function() {
    $(this).addClass('validate-input');
    if ( $(this).val().length >= 1 ) {
      $(this).siblings('.bar').children('.clear-input').fadeIn();
    } else {
        $(this).siblings('.bar').children('.clear-input').fadeOut();
      }
  });
  
  $('.password').on('keydown keyup', function() {
    if ( $(this).val().length >= 1 ) {
      $(this).siblings('.bar').children('.eye').fadeIn();
    } else {
        $(this).siblings('.bar').children('.eye').fadeOut();
      }
  });
  
  $('.effect-input').on('focusout', function() {
    $(this).addClass('validate-input');
    if ( $(this).val() == '' ) {
      $(this).siblings('.support-text, .bar').removeClass('active-input');
    }
  });
  
  $('.clear-input').on('click', function() {
    $(this).fadeOut();
    $(this).siblings('.eye').fadeOut();
    $(this).parent('.bar').siblings('.effect-input').val('');
    $(this).siblings('.eye').addClass('fa-eye-slash').removeClass('fa-eye view-pass');
    $(this).parent('.bar').siblings('.password').attr('type', 'password');
    $(this).parent('.bar').siblings('.effect-input').focusout();
    $(this).parent('.bar').siblings('.effect-input').removeClass('validate-input');
  });
  
  $('.eye').on('click', function() {
    $(this).toggleClass('fa-eye-slash fa-eye view-pass');
    if ( $(this).hasClass('view-pass') ) {
      $(this).parent('.bar').siblings('.password').attr('type', 'text');
    } else {
        $(this).parent('.bar').siblings('.password').attr('type', 'password');
      }
  });
  
  $('#reset-inputs').on('click', function() {
    $(this).blur();
    $('.clear-input, .eye').fadeOut();
    $('.eye').addClass('fa-eye-slash').removeClass('fa-eye view-pass');
    $('.password').attr('type', 'password');
    $('.effect-input').removeClass('validate-input');
    $('.effect-input').siblings('.support-text, .bar').removeClass('active-input');    
  });

}); 

</script>