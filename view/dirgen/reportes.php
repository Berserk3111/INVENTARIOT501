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



?>

<center><h1>Reportes</h1></center>
<br>
<center><h3>Ingrese la fecha en la que desee generar su reporte</h3></center>

<br>

<div class="card-header">
<div class="card-header">Reporte</div>
  <div class="card-body">
  <form action="../pdf/pdfrepo.php" method="POST">
  
  <div class="form-group">
    <label >Fecha de inicial del reporte</label>
    <input name="fecha_i" type="date" required class="form-control" id="fecha">
  </div>

  <div class="form-group">
    <label >Fecha Final del reporte </label>
    <input name="fecha_f" type="date" required class="form-control" id="fecha">
  </div>

  <div class="form-group">
    <label >Nombre del reporte</label>
    <input name="nomb" type="text" required class="form-control" id="fecha">
  </div>
  

  </div>
 
 
  <input type="hidden" value="agregarprod" name="valor">
  <button type="submit" class="btn btn-dark">Agregar</button>
  
</form>
</div>



</body>
</html>

