<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page" style="background-image: url('https://scontent.fscl24-1.fna.fbcdn.net/v/t39.30808-6/316418954_226014266416454_1740851872483473823_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFkU56QoIWCNLbEd8LqFcw1fQeHnrfnWnN9B4eet-dacyP_oN3GdlM-f5Y3g8Jfy28AN2OLIxQNz2foNo7nrY6h&_nc_ohc=Vq3YXUj_xCEQ7kNvgEnV8lD&_nc_zt=23&_nc_ht=scontent.fscl24-1.fna&_nc_gid=AgL-X3FbFi9mNaNQRImXTAY&oh=00_AYCYrpeOmVfrpj2yxyz8xbN1Nwwsqb_yN4295zkHcZzfUQ&oe=678B9130'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <script>
    start_loader()
  </script>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./" class="h1">
        <b>ACCESO ADMIN</b>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT5SfbDNZHWkOas83xePWfMLS40pfrdXN2KQ&s" alt="Icono Admin" style="width: 120px; height: 120px; margin-left: 10px;">
      </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">INGRESA COMO ADMIN</p>

      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
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
        <div class="row">
          <div class="col-8">
            <a href="<?php echo base_url.'customer' ?>">Acceso establemiento educativo</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>

