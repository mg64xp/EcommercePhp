$(document).ready(function () {
    var funcion;
    inicio_sesion();
    function inicio_sesion(){
        funcion = 'inicio_sesion';
        $.post('../controllers/UsuarioController.php',{funcion},(response)=>{
            if(response != ''){
                location.href = '../index.php'

            }
        })
    }
    $('#form-login').submit(e=>{
        funcion = 'login';
        let user= $('#user').val()
        let pass = $('#pass').val()
        $.post('../controllers/UsuarioController.php',{user, pass, funcion},(response)=>{
            if(response=='logueado'){
                toastr.success('*se ha iniciado sesion!');
                location.href = '../index.php'
            } 
            else{
               toastr.error('no se ha podido iniciar sesion');
            }
        })
        e.preventDefault()
    })
})