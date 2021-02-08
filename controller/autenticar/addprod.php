<?php 


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$servername = "localhost";
$username = "root";
$password = "";
$bd = "inventario";


function producto_add($servername, $username, $password, $bd, $codigo_add, $producto_add, $fecha_add, $cantidad_add, $img_add){
    
    $conn = new mysqli($servername, $username, $password, $bd);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
    else{
        $sql = "INSERT INTO `productos` (`id_producto`, `codigo`, `nombre`, `fecha_ingreso`, `cantidad`, `img`)VALUES (NULL,'".$codigo_add."','".$producto_add."','".$fecha_add."','".$cantidad_add."','".$img_add."')";
        $resultado = $conn->query($sql);
        if($resultado){
            $status = 1;
        }else { echo "No se encontraron resultados ";}

        $conn->close();
        }
        return $status;
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }



    $accion = isset($_POST['valor']) ? $_POST['valor']:$accionpredefinida;
    switch($accion){
        case 'eliminaruser':
            $id = $_POST['id_producto'];
            deleteUser($id);
            break;
    }

    function deleteUser($id){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bd = "inventario";
        $conn = new mysqli($servername, $username, $password, $bd);
        $conn->set_charset("utf8");
    $sql="DELETE FROM productos where id_producto=".$id;
    $delUs = mysqli_query($conn,$sql);
    if($delUs){
    
        echo "<script type=\"text/javascript\">
        alert(\"PRODUCTO ELIMINADO\");
        </script>";
        echo"<script type='text/javascript'>
        window.location='../../view/administrador/administrador.php';
        </script>";
    }
    
    
    }
     
?>