<?php 

class producto {

    private $codigo;
    private $producto;
    private $fecha;
    private $cant;
    private $img;
    

    function _construct(){

        $this-> codigo = "";
        $this-> producto = "";
        $this-> fecha = "";
        $this->cant = "";
        $this->img = "";
       
        
    }

    public function get_Codigo(){
        return $this-> codigo;
    }
    public function get_Producto(){
        return $this-> producto;
    }
    public function get_Fecha(){
        return $this-> fecha;
    }
    public function get_Cantidad(){
        return $this-> cant;
    }
    public function get_Imagen(){
        return $this-> img;
    }

  

    public function set_Codigo($codigo){
        return $this-> codigo = $codigo;
    }

    public function set_Producto($name){
        return $this-> producto = $name;
    }

    public function set_Fecha($fecha){
        return $this-> fecha = $fecha;
    }

    public function set_Cantidad($cantidad){
        return $this-> cant = $cantidad;
    }

    public function set_Imagen($imagen){
        return $this-> img = $imagen;
    }

   
 
}
 
?>