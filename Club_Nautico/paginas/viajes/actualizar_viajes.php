<?php 
    include('../conecction.php');
    $con = connection();

    $consultar = "SELECT * FROM salidas";
    $query = mysqli_query($con, $consultar);

    include("../../paginas/plantillas/section_superior.php");
    include("../../paginas/plantillas/logo.php");
    include("../../paginas/plantillas/header.php");
    $i = 99;
?>

<div class="grid text-center" style="--bs-columns: 3;">
    <br>
    <br>
    <!-- <h2>Proximos Viajes</h2> -->
    <div class="row row-cols-6 row-cols-md-3 g-3"  style="width: auto">
            <?php while($row = mysqli_fetch_array($query)): ?>
                
                        <?php
                        $id_barco = $row['id_barco']; // Obtener el id_barco de la salida actual
                        $sql_barco = "SELECT nombre_barco FROM barcos WHERE id_barco = $id_barco";
                        $result_barco = $con->query($sql_barco);

                        if ($result_barco->num_rows > 0) {
                            $row_barco = $result_barco->fetch_assoc();
                            $row_barco["nombre_barco"];
                        }
                        ?>

                        <div class="col">
                            <div class="card h-100">
                                <?php
                                    $numImagenes = 40; // Cantidad de imágenes
                                    $i = $i + 1;
                                    $imagenURL = $i . ".jpg"; // Generar el nombre de la imagen
                                ?>
                                <img src="..\..\img\<?= $imagenURL ?>" class="card-img-top" alt="..." style="height: auto; width: auto">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['destino'] ?></h5>
                                    <p class="card-text">El viaje se llevará a cabo el <?= $row['fecha_salida'] ?> a las <?= $row['hora_salida'] ?> a bordo del <?= $row_barco["nombre_barco"] ?></p>
                                </div>
                            </div>
                        </div>
                    
                    <br>
            <?php endwhile; ?>
            </div>
</div>


<!-- PRUEBA PARA COLOCAR TARJETAS DE INFORMACIÓN -->



<br>



<?php include("../../paginas/plantillas/footer.php"); ?>
