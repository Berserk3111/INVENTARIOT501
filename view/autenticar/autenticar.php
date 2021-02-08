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
    <link rel="stylesheet" href="style.css">
    <title>Autenticar</title>

</head>
<body>

<?php 

    session_start();
    if(isset($_SESSION['login'])){
        //echo "Sesion " . $_SESSION['login'] . "<br>";
    } else {
        //echo "Sin Inicio de Sesion <br> ";
    }
?>

<div class="bg">

        <br><br><br><br><br>
    
        <div class="container-fluid">
        <div class=" col-lg-3 offset-lg-3 p-20 col-md-3">
        <div class="card">
        <div class="row no-gutters">
            <div class="col-auto">
                <img src="../../../img/LOG.png" class="img-fluid" alt="">
            </div>
            
            <div class="col">
            <center>
                <div class="card-block px-5">  
                <div class="card-body">
                    <center>
                <form action="../../controller/autenticar/autenticar.php " method="post" class="for">
                <label class="fl" >Usuario</label>
                <br>
                <input type="text" name="usuario_autenticar" class="rounded-pill">
                <br>
                <label class="fl" >Contraseña</label>
                <br>
                <input type="password" name="pwd_autenticar" class="rounded-pill">
                <br>
                <br>
                <input type="submit" value="Autenticar" class="btn peach-gradient rounded-pill">
                </center>
                </center> 
                </div>
                </div>
                </div> 
                </div> 
            </div>
        </div>
        </div>
        </div>

     
  </div>
</body>
</html>