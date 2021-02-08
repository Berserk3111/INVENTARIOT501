<?php
$conect = mysqli_connect("localhost","root","","inventario");
$conect->set_charset("utf8");

$servername = "localhost";
$username = "root";
$password = "";
$bd = "inventario";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


if($_POST["usuario_autenticar"]  !="" && $_POST["pwd_autenticar"] !="" ){

    $usuario = $_POST['usuario_autenticar'];
    $contrasenia = $_POST['pwd_autenticar'];

     $log="SELECT *  FROM `usuarios` WHERE `usuario` = '".$usuario."' AND `pass` = '".$contrasenia."'";

     
     $query = mysqli_query($conect,$log);
     if ($query-> num_rows > 0){
         
   while($row = mysqli_fetch_array($query)){
       @session_start();
       $_SESSION["user"]= $row["usuario"];
       $_SESSION["perfil"]= $row["perfil"];


   }
        
   switch($_SESSION["perfil"]){
    case 1:
        echo "<script type=\"text/javascript\">
        alert(\"Usuario correcto bienvenido Administrador\");</script>"; 
        echo"<script type='text/javascript'>
        window.location='../../view/administrador/administrador.php';
        </script>";
    break;
    case 2:
        echo "<script type=\"text/javascript\">
        alert(\"Usuario correcto bienvenido Director General\");</script>"; 
        echo"<script type='text/javascript'>
        window.location='../../view/dirgen/dirgen.php';
        </script>";
    break;
    case 3:
        echo "<script type=\"text/javascript\">
        alert(\"Usuario correcto bienvenido \");</script>"; 
        echo"<script type='text/javascript'>
        window.location='../../view/personal/personal.php';
        </script>";
    break;
    case 4:
        echo "<script type=\"text/javascript\">
        alert(\"Usuario correcto bienvenido Director de Departamento \");</script>"; 
        echo"<script type='text/javascript'>
        window.location='../../view/dirdep/dirdep.php';
        </script>";
    break;
}
}else{
echo "<script type=\"text/javascript\">
alert(\"Usuario o contraseña incorrectas\");</script>"; 
echo"<script type='text/javascript'>
window.location='../../view/autenticar/autenticar.php';
</script>"; }

}else{
echo "<script type=\"text/javascript\">
alert(\"Formulario vacio\");</script>"; 
echo"<script type='text/javascript'>
window.location='../../view/autenticar/autenticar.php';
</script>";

}


function producto_add($servername, $username, $password, $bd, $codigo_add, $producto_add, $fecha_add, $cantidad_add, $img_add){
    
    $conn = new mysqli($servername, $username, $password, $bd);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
    else{
        $sql = "INSERT INTO `productos` (`id_producto`, `codigo`, `nombre`, `fecha_ingreso`, `cantidad`, `img`) 
        VALUES (NULL,'".$codigo_add."','".$producto_add."','".$fecha_add."','".$cantidad_add."','".$img_add."')";
        $resultado = $conn->query($sql);
        if($resultado){
            $status = 1;
        }else { echo "No se encontraron resultados ";}

        $conn->close();
        }
        return $status;
    }


?>
