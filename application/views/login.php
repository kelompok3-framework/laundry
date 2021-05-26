<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container"><br><br><br><br><br><br>
     <div class="row justify-content-center">
  <div class="login-box col-lg-5">
    <!-- /.login-logo -->
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12">
      <div class="card-body login-card-body">
        <div class="row justify-content-center">
        <p class="login-box-title">SISTEM INFORMASI LAUNDRY</p>
      </div>
      <div class="text-center">
         <?php echo $this->session->flashdata('pesan') ?>
       </div>

        <form action="<?= base_url();?>authorization/login" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <button type="submit" class="btn btn-primary btn-block" style="margin-top: 0 !important ;">Login</button>
            </div>
              <div>
              <a href="<?= base_url()?>index.php/authorization/registrasi" type="submit" class="btn btn-info btn-block">Registrasi</a>
              </div>
              
            <!-- /.col -->
          </div>
        </form>
      </div>
    </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $(document).ready(function () {
          var data = $('.data-flush').data('flash');
          console.log(data);
          if (data) {
              var a = data.split(',');
              if (a[1].replace(/\s/g, '') == 'success') {
                  swal("Information!", a[0], "success");
              } else {
                  swal("Information!", a[0], "error");
              }
          }
      })
    })
  </script>

</body>

</html>