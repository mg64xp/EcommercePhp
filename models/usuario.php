<?php
    include_once 'conexion.php';
    class usuario{
        var $objetos;
        public function __construct(){
            $db = new conexion();
            $this->acceso = $db->pdo;
        }
        function loguearse($user, $pass){
           $sql="SELECT * FROM usuario 
                    WHERE user =:user AND pass=:pass";
           $query = $this->acceso->prepare($sql);
           $query->execute(array(':user'=>$user,':pass'=>$pass));
           $this->objetos = $query->fetchAll();
           return $this->objetos;
        }
        function verificar_usuario($user){
            
           $sql="SELECT * FROM usuario 
                    WHERE user =:user";
           $query = $this->acceso->prepare($sql);
           $query->execute(array(':user'=>$user));
           $this->objetos = $query->fetchAll();
           return $this->objetos;
        }
        function registrar_usuario($username, $pass, $nombres, $apellidos, $email, $dni, $telefono,){
            $sql="INSERT INTO usuario(user, pass, nombres, apellidos, email, dni, telefono,  id_tipo) 
                VALUES(:user, :pass, :nombres, :apellidos, :email, :dni, :telefono,  :id_tipo)";
           $query = $this->acceso->prepare($sql);
           $query->execute(array(':user'=>$username, ':pass'=>$pass, ':nombres'=>$nombres, ':apellidos'=>$apellidos, ':email'=>$email, ':dni'=>$dni, ':telefono'=>$telefono,':id_tipo'=>2));
        }
    }
