<?php

    include('../conecction.php');
    $con = connection();

    $id_numeroCliente = null;
    $id_barco = $_POST['id'];
    $fecha_Salida = $_POST['fecha'];
    $hora_Salida = $_POST['hora'];
    $destino_Salida = $_POST['destino'];


    $insertar = "INSERT INTO salidas (id_barco, fecha_salida, hora_salida, destino) VALUES ('$id_barco', '$fecha_Salida', '$hora_Salida', '$destino_Salida')";
    $query = mysqli_query($con, $insertar);

    if($query){
        Header("Location: insertar_salida.php");
    }

?>