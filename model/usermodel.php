<?php 
class usuario{
    private $usuario;
    private $contrasenia;
    private $correo;
    

    function _construct(){

        $this-> nombre = "";
        $this-> contrasenia = "";
        $this-> correo = "";
        

    }

    public function get_Nombre(){
        return $this-> nombre;
    }

    public function get_Contrasenia(){
        return $this-> contrasenia;
    }

    public function get_Correo(){
        return $this-> correo;
    }

    

    public function set_Nombre($name){
        $this-> nombre = $name;
    }

    public function set_Contrasenia($password){
        $this-> contrasenia = $password;
    }

    public function set_Correo($email){
        $this-> correo = $email;
    }

   
}

?>