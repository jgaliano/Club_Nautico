<?php
    include('../conecction.php');
    $con = connection();

    $id = $_GET['id'];

    $eliminar = "DELETE FROM salidas WHERE id_salida='$id'";
    $query = mysqli_query($con, $eliminar);

    if($query){
        Header("Location: insertar_salida.php");
    }

?>