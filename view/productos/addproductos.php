<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Agregar Usuario</title>
</head>
<body>

<?php 

require '../../controller/autenticar/addprod.php';
include '../../model/addprod.php';

?>

<center><h1>Registro de productos</h1></center>
<br>
<center><h3>Rellene los campos segun la informacion sea requerida</h3></center>

<br>

<div class="card-header">
<div class="card-header">Agregar Producto</div>
  <div class="card-body">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" require_once>
  <div class="form-group">
    <label >Codigo del producto</label>
    <input name="codigo" type="text" required class="form-control" id="codigo">
  </div>
  <div class="form-group">
    <label >Nombre del producto</label>
    <input name="name" type="text" required class="form-control" id="name">
  </div>
  <div class="form-group">
    <label >Fecha de ingreso</label>
    <input name="fecha" type="date" required class="form-control" id="fecha">
  </div>
  <div class="form-group">
    <label >Cantidad</label>
    <input name="cantidad" type="number" required class="form-control" id="cantidad">
  </div>
  <div class="form-group">
    <label >URL imagen</label>
    <input name="imagen" type="text" required class="form-control" id="iamgen">
  </div>
  
  <input type="hidden" value="agregarprod" name="valor">
  <button type="submit" class="btn btn-dark">Agregar</button>
  
</form>
</div>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_add = new producto(); 

    $producto_add->set_Codigo(test_input($_POST["codigo"]));
    $producto_add->set_Producto(test_input($_POST["name"]));
    $producto_add->set_Fecha(test_input($_POST["fecha"]));
    $producto_add->set_Cantidad(test_input($_POST["cantidad"]));
    $producto_add->set_Imagen(test_input($_POST["imagen"]));

    $pase = producto_add($servername, 
    $username, 
    $password, 
    $bd, 
    $producto_add->get_Codigo(), 
    $producto_add->get_Producto(),
    $producto_add->get_Fecha(),
    $producto_add->get_Cantidad(),
    $producto_add->get_Imagen()
);

    if ($pase == 1 ){
        echo "<script type=\"text/javascript\">alert(\"Exito Usuario registrado\");</script>"; 
        echo"<script type='text/javascript'>
        window.location='../administrador/administrador.php';
        </script>";
}
if ($pase == 0) {
        echo "<script type=\"text/javascript\">alert(\"Error no se recibieron todos los datos\");</script>"; 
        echo"<script type='text/javascript'>
        window.location='../administrador/administrador.php';
        </script>";
}


}


?>

</body>
</html>


    

