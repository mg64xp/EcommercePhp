$(document).ready(function (){

  var funcion;
  inicio_sesion;
    function inicio_sesion(){
      funcion = 'inicio_sesion';
      $.post('../controllers/UsuarioController.php',{funcion},(response)=>{
          if(response != ''){
              location.href = '../index.php'

          }
      })
  }




  $.validator.setDefaults({
    submitHandler: function () {
      let username = $("#username").val();
      let pass = $("#pass").val();
      let nombres = $("#nombres").val();
      let apellidos = $("#apellidos").val();
      let email = $("#email").val();
      let dni = $("#dni").val();
      let telefono = $("#telefono").val();
      funcion= 'registrar_usuario';
      $.post('../controllers/UsuarioController.php',{username, pass, nombres, apellidos, email, dni, telefono, funcion},(response)=>{ 
        if(response == 'success') {
          Swal.fire({
            position: 'center',
            icon: "success",
            title: "Registro exitoso!",
            showConfirmButton: false,
            timer: 2500
          }).then(function() {
            $('#form-register').trigger('reset');
            location.href = '../views/login.php'
          })
        }else{
          Swal.fire({
            icon: "error",
            title: "Error!",
            text: "No se pudo registrar el usuario!",
          });
          }
      })
    }
  });
  jQuery.validator.addMethod("usuario_existe",
        function(value, element) {
           let funcion ="verificar_usuario";
           let bandera;

           $.ajax({
               type: "POST",
               url: "../controllers/UsuarioController.php",
               data: 'funcion='+funcion+'&&value='+value,
               async: false,
               success: function(response){
                   if( response == 'success' ){
                       bandera = false;
                   }else{
                       bandera = true;
                   }
               }
           })
        
           return bandera;
    }
   ,"El usuario ya existe, por favor elija otro");
  jQuery.validator.addMethod("letras",
        function(value, element) {
            return /^[a-zA-Z ]+$/.test(value);
    }
   ,"Por favor ingrese solo letras");
  
  $('#form-register').validate({
    rules: {
      nombres:{
        required: true,
        letras: true
      },
      apellidos:{
        required: true,
        letras: true
      },
      username:{
        required: true,
        minlength: 4,
        maxlength: 20,
        usuario_existe: true
      },
      pass:{
        required: true,
        minlength: 8,
        maxlength: 20
      },
      pass_repeat:{
        required: true,
        equalTo: "#pass"
      },
      dni:{
        required: true,
        digits: true,
        maxlength: 8,
        minlength:8
      },
      email: {
        required: true,
        email: true,
      },
      telefono:{
        required: true,
        digits: true,
        maxlength: 11,
        minlength:11
      },
      terms: {
        required: true
      },
    },
    messages: {
      nombres:{
        required: "Por favor ingrese sus nombres",

      },
      apellidos:{
        required: "Por favor ingrese sus apellidos",
      },
      username:{
        required: "Por favor ingrese su nombre de usuario",
        minlength: "Tu nombre de usuario debe tener al menos 8 caracteres",
        maxlength: "Tu nombre de usuario debe tener menos de 20 caracteres"
      },
      pass:{
        required: "Por favor ingrese una contraseña",
        minlength: "Tu contraseña debe tener al menos 5 caracteres",
        maxlength: "Tu contraseña debe tener menos de 20 caracteres"
      },
      pass_repeat:{
        required: "Por favor ingrese una contraseña",
        equalTo: "Las contraseñas no coinciden"
      },
      dni:{
        required: "Por favor ingrese su dni",
        digits: "Tu dni solo debe tener digitos",
        maxlength: "Tu dni debe tener 8 caracteres",
        minlength: "Tu dni debe tener 8 caracteres"
      },
      telefono:{
        required: "Por favor ingrese su telefono",
        digits: "Tu telefono solo debe tener digitos",
        maxlength: "Tu telefono debe tener 11 caracteres",
        minlength: "Tu telefono debe tener 11 caracteres"
      },
      email: {
        required: "Por favor ingrese un email",
        email: "Necesitas un email valido"
      },
      terms: "Por favor acepte los terminos de uso"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
      $(element).removeClass('is-valid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
      $(element).addClass('is-valid');
    }
  });

})  