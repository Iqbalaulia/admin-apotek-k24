<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Master User</title>
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
  
  <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

  <!-- Bootstrap Date-Picker Plugin -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <script type="text/javascript" src="js/muser.js"></script>

  <!-- Icon Title -->
  <link rel="shortcut icon" href="img/team.png">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
  include 'navbar.php';
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Master User</li>
      </ol>
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <br>
        <div class="col-md-6">
          <a data-toggle="modal" href='#modal-id'> <button type="button" class="btn btn-outline-success"> + Tambah Data</button></a>
          <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                </div>
                <div class="modal-body" >

    
<!-- 
                  <div class="form-group">
                   <div class="form-row">
                     <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"  id="warning_username">
                      <label>ID User</label>
                      <input id="id" type="text" name="id" class="form-control">
                    </div>
                  </div>
                </div>
    -->

                  <div class="form-group">
                   <div class="form-row">
                     <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"  id="warning_username">
                      <label>Username</label>
                      <input id="username" type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                  </div>
                </div>
                <div class="form-group" id="warning_password">
                 <div class="form-row">
                   <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                     <label>Password</label>
                     <input class="form-control" id="password" name="password" type="text" aria-describedby="nameHelp" placeholder="Password">
                   </div>
                 </div>
               </div>

               <div class="form-group" id="warning_namalengkap">
                <div class="form-row">
                 <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                  <label>Nama Lengkap</label>
                  <input class="form-control" id="namalengkap" name="namalengkap" type="text" aria-describedby="nameHelp" placeholder="Nama Lengkap">
                </div>
              </div>
            </div>
            <div class="form-group" id="warning_namalengkap">
              <div class="form-row">
               <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <label>level</label>
                 <select class="form-control" id="level" name="level">
                    <option></option>
                    <option>Manager</option>
                    <option>Gudang</option>
                    <option>Kasir</option>
                    <option>Kepala</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="form-group" id="warning_email">
           <div class="form-row">
             <div class="col-md-7">
               <label>Email</label>
               <input class="form-control" id="email" name="email" type="text" aria-describedby="nameHelp" placeholder="Email">
             </div>
             <div class="col-md-5 col-sm-5 col-lg-5 col-xs-5">
               <label>Telepon</label>
               <input class="form-control" id="telepon" name="telepon" type="text" aria-describedby="nameHelp" placeholder="Telepon" onkeypress="return validtelp(event)" maxlength="12">
             </div>
           </div>
         </div>
         <div class="form-group" id="warning_tanggal">
           <div class="form-row">
             <div class="col-md-12">
              <label class="control-label" for="date">Tanggal User</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="MM/DD/YYY"/>
            </div>
          </div>
        </div>
        <br>
        <input type="submit" class="btn btn-success" name="simpan" id="ajaxuser" value="Simpan"></input>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>



<br>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Data User</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Nama Lengkap</th>
              <th>Level</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
             <th>Username</th>
             <th>Password</th>
             <th>Nama Lengkap</th>
             <th>Level</th>
             <th>Email</th>
             <th>Telepon</th>
             <th>Tanggal</th>
             <th>Aksi</th>
           </tr>
         </tfoot>
         <tbody>
           <?php 
           include 'config.php';
           $view = $dbconnect -> query("SELECT * FROM masteruser");
           while ($row=$view->fetch_array()) {

            ?>
            <tr>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['password']; ?></td>
              <td><?php echo $row['namalengkap']; ?></td>
              <td><?php echo $row['level']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['telepon']; ?></td>
              <td><?php echo $row['tanggal']; ?></td>
              <td>
                <center> <a class="btn btn-outline-warning fa fa-edit" href="editMuser.php?username=<?php echo $row['username']; ?>" name="edit">Edit</a>


                 <a class="btn btn-outline-danger fa fa-trash" onclick="delete_data('<?php echo $row['username']; ?>')" >Hapus</a>

               </td>
             </tr>

             <?php
           }
           ?>

         </tbody>
       </table>
     </div>
   </div>
   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
 </div>
</div>


<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © Your Website 2018</small>
    </div>
  </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div> -->
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->

<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>



</div>

</body>

</html>
