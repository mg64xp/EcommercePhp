<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../util/Css/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../util/Css/adminlte.min.css">
  <link rel="stylesheet" href="../util/Css/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="../util/img/mg.png" alt="" class="profile-user-img img-fluid img-circle">
    <a href="../index.php"><b>Mg</b>64</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicie sesión</p>

      <form id="form-login">
        <div class="input-group mb-3">
          <input id="user" type="text" class="form-control" placeholder="User" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pass" type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
              <div class="social-auth-links text-center mb-3">
               
                <button type="submit" href="#" class="btn btn-block btn-primary">
                  Iniciar sesión
                </button>
               
              </div>
              <!-- /.social-auth-links -->
        
      </form>

      <p class="mb-1">
        <a href="">Olvide la contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.php
        " class="text-center">Registrarme</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../util/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../util/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
<script src="login.js"></script>
<script src="../util/js/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../util/js/toastr.min.js"></script>
</body>
</html>
