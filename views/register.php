<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina | Register</title>

  <!-- Google Font: Source Sans Pro -->
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../util/Css/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../util/Css/adminlte.min.css">
  <link rel="stylesheet" href="../util/Css/toastr.min.css">
  <link rel="stylesheet" href="../util/Css/sweetalert2.min.css">
</head>
<!-- Modal -->
<div class="modal fade" id="terminos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="card card-success">
      <div class="card-header">
            <h1 class="card-title " >Terminos y condiciones</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="card-body">
           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse consequuntur, libero possimus laboriosam culpa praesentium, consequatur ducimus veniam aliquid molestias dolorem incidunt nulla quam nostrum. Officia sapiente magnam architecto repellat!</p>
           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem deserunt quas tenetur excepturi tempore numquam dolore commodi eveniet hic ullam? Nam veritatis ea, accusantium cupiditate quaerat cum. Molestiae, laborum aspernatur.</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cerrar</button>
        
        </div>
        </div>
      </div>
  </div>
</div>
<body class="hold-transition login-page">
<div class="">
  <div class="login-logo">
    <img src="../util/img/mg.png" alt="" class="profile-user-img img-fluid img-circle">
    <a href="../index.php"><b>Mg</b>64</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrarse</p>

      

             <form id="form-register">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="username">Nombre de usuario</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Ingrese nombre de usuario">
                        </div>
                    </div>
                    <dic class="col-sm-6">
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Ingrese contraseña">
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Ingrese nombres ">
                        </div>
                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="text" name="dni" class="form-control" id="dni" placeholder="Ingrese su numero de Dni ">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese su numero de telefono ">
                        </div>
                    </dic>
                    <dic class="col-sm-6">
                        <div class="form-group">
                            <label for="pass_repeat">Repetir Contraseña</label>
                            <input type="password" name="pass_repeat" class="form-control" id="pass_repeat" placeholder="Repetir contraseña">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ingrese apellidos ">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Ingrese su Email ">
                        </div>
                    </dic>
                    <div class="col-sm-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                            <label class="custom-control-label" for="terms">Estoy de acuerdo con los <a href="#" data-toggle="modal" data-target="#terminos">terminos de uso</a>.</label>
                        </div>
                    </div>
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-lg bg-gradient-primary">Registrarme</button>
                </div>
            </form>

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

<script src="../util/js/adminlte.min.js"></script>
<script src="../util/js/toastr.min.js"></script>
<script src="../util/js/jquery.validate.min.js"></script>
<script src="../util/js/additional-methods.min.js"></script>
<script src="../util/js/sweetalert2.min.js"></script>



<script src="register.js"></script>
</body>
</html>
