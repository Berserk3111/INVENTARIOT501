<?php
function getUsers(){
        $conect = mysqli_connect("localhost","root","","inventario");
$conect->set_charset("utf8");
        $sql="SELECT * FROM productos ";
        $getUs = mysqli_query($conect,$sql);
        if ($getUs->num_rows> 0){
             while($row = mysqli_fetch_array ($getUs)){
            ?>

        <tr>
        <th scope='col'> <?php echo $row["codigo"]?></th>
        <th scope='col'> <?php echo $row["nombre"]?></th>
        <th scope='col'> <?php  echo $row["fecha_ingreso"]?></th>
        <th scope='col'> <?php  echo $row["cantidad"]?></th>
        <th scope='col'> <img src="<?php  echo $row["img"]?>" width="80px"></th>
        <th scope='col'>
        <form action='../../controller/autenticar/addprod.php' method='POST'
        onSubmit="if(!confirm('¿Realmete quiere eliminar este producto?')){return flase;}">
        <input type='hidden' name='id_producto' value="<?php echo $row["id_producto"];?>">
        <input type='hidden' value ='eliminaruser' name='valor'>
        <input type="submit" value="Eliminar" class="btn btn-danger rounded-pill">
        </form>
        </th>


        </tr>
        
        <?php
    }
}

}

function getproper(){
    $conect = mysqli_connect("localhost","root","","inventario");
$conect->set_charset("utf8");
    $sql="SELECT * FROM productos ";
    $getUs = mysqli_query($conect,$sql);
    if ($getUs->num_rows> 0){
         while($row = mysqli_fetch_array ($getUs)){
        ?>

    <tr>
    <th scope='col'> <?php echo $row["codigo"]?></th>
    <th scope='col'> <?php echo $row["nombre"]?></th>
    <th scope='col'> <?php  echo $row["fecha_ingreso"]?></th>
    <th scope='col'> <?php  echo $row["cantidad"]?></th>
    <th scope='col'> <img src="<?php  echo $row["img"]?>" width="80px"></th>
    
    </tr>
    
    <?php
}
}

}

?>
