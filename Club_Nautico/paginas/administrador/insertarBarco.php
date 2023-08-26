<?php

    include('../conecction.php');
    $con = connection();

    $id_numeroCliente = null;
    $id_socio = $_POST['id'];
    $nombre_barco = $_POST['nombre'];
    $matricula_barco = $_POST['matricula'];
    $amarre_barco = $_POST['amarre'];
    $cuota_barco = $_POST['cuota'];


    $insertar = "INSERT INTO barcos (id_socio, numero_matricula, nombre_barco, numero_amarre, cuota_amarre) VALUES ('$id_socio', '$matricula_barco', '$nombre_barco', '$amarre_barco', '$cuota_barco')";
    $query = mysqli_query($con, $insertar);

    if($query){
        Header("Location: insertar_barco.php");
    }

?>