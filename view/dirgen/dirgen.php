<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
  <a class="navbar-brand" href="#">Sistema de Inventario</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a href="../dirgen/reportes.php" class="btn peach-gradient rounded-pill">Generador de Reportes</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
      <form method="post" action="../../controller/autenticar/logout.php">
        <input type="submit" value="Cerrar sesión" class="btn peach-gradient rounded-pill">
        </form>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->



<?php require ("../../model/productos.php"); ?>

<div>




</div>

<div class="  container pt-5">
        <div class="row">
        <div class="col-lg-10">
        <h1 class="text-center">PRODUCTOS</h1>
        </div>
        </div>
  <div class="col-sm-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Producto</th>
      <th scope="col">fecha</th>
      <th scope="col">cantidad</th>
      <th scope="col">imagen</th>
      <th scope="col">Opcion</th>
    </tr>
  </thead>
  <tbody>
  <?php
        getUsers()
        ?>
  </tbody>
</table>
    </div>
    </div>
    </div>

    
</body>
</html>