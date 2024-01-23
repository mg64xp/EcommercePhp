$(document).ready(function () {
    var funcion;
    inicio_sesion();
    function inicio_sesion(){
        funcion = 'inicio_sesion';
        $.post('../controllers/UsuarioController.php',{funcion},(response)=>{
            console.log(response);
            if(response != ''){
               let sesion=JSON.parse(response);
               $('#nav_login').hide();
               $('#nav_register').hide();
               $('#usuario_nav').text(sesion.user + ' #' +sesion.id);
               $('#avatar_nav').attr('src','../util/img/'+sesion.avatar);
               $('#avatar_menu').attr('src','../util/img/'+sesion.avatar);
               $('#usuario_menu').text(sesion.user);
            }else{
                location.href = 'login.php'
            }
        })
    }
   
})