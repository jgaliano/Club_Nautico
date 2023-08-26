<?php

    include('../conecction.php');
    $con = connection();

    $id_numeroCliente = null;
    $nombre_Socio = $_POST['nombre'];
    $apellido_Socio = $_POST['apellido'];
    $correo_Socio = $_POST['correo'];


    $insertar = "INSERT INTO socios (nombre, apellido, correo_electronico) VALUES ('$nombre_Socio', '$apellido_Socio', '$correo_Socio')";
    $query = mysqli_query($con, $insertar);

    if($query){
        Header("Location: insertar_socio.php");
    }

?>