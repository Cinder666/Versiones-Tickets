<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page" style="background-image: url('https://scontent.fscl24-1.fna.fbcdn.net/v/t39.30808-6/316418954_226014266416454_1740851872483473823_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFkU56QoIWCNLbEd8LqFcw1fQeHnrfnWnN9B4eet-dacyP_oN3GdlM-f5Y3g8Jfy28AN2OLIxQNz2foNo7nrY6h&_nc_ohc=Vq3YXUj_xCEQ7kNvgEnV8lD&_nc_zt=23&_nc_ht=scontent.fscl24-1.fna&_nc_gid=AgL-X3FbFi9mNaNQRImXTAY&oh=00_AYCYrpeOmVfrpj2yxyz8xbN1Nwwsqb_yN4295zkHcZzfUQ&oe=678B9130'); background-size: cover; background-position: center;">
  <script>
    start_loader()
  </script>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./" class="h1">
        <b>SOPORTE TEC</b>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT5SfbDNZHWkOas83xePWfMLS40pfrdXN2KQ&s" 
             alt="Icono Soporte" 
             style="width: 120px; height: 120px; margin-left: 10px;">
      </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">INGRESO INSTITUCION EDUCATIVA</p>

      <form id="clogin-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <a href="javascript:void(0)" id="create_user">Regístrate</a>
          </div>
          <div class="col-8">
            <a href="<?php echo base_url.'admin' ?>">
              Acceso Admin
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT5SfbDNZHWkOas83xePWfMLS40pfrdXN2KQ&s" 
                   alt="Icono Admin" 
                   style="width: 100px; height: 100px; margin-left: 5px;">
            </a>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
      </div>
    </div>
  </div>
<script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url ?>dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function(){
    end_loader();
    $('#create_user').click(function(){
      uni_modal("<span class='fa fa-plus text-primary'></span> Crear Nuevo Usuario",_base_url_+'customer/user/create_user.php','md-large');
    })
  })
  window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("Ha ocurrido un error")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
</script>
</body>
</html>

