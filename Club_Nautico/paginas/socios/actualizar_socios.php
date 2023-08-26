<?php 

    include('../conecction.php');
    $con = connection();

    $consultar ="select * from socios";

    $query = mysqli_query($con, $consultar);

    include("../../paginas/plantillas/section_superior.php");
    include("../../paginas/plantillas/logo.php");
    include("../../paginas/plantillas/header.php");
    $i = 50;
?>

    <div  class="grid text-center" style="--bs-columns: 3;">
    <br>
    <br>
    <div class="row row-cols-6 row-cols-md-4 g-4"  style="width: 70rem; height: auto;">
        <!-- <h2>Socios Registrados</h2> -->
            <?php while($row = mysqli_fetch_array($query)): ?>

                <?php
                        $id_socio = $row['id_socio']; // Obtener el id_barco de la salida actual
                        $sql_barco = "SELECT nombre_barco FROM barcos WHERE id_socio = $id_socio";
                        $result_barco = $con->query($sql_barco);

                        if ($result_barco->num_rows > 0) {
                            $row_barco = $result_barco->fetch_assoc();
                            $row_barco["nombre_barco"];
                        }
                        ?>

                <div class="col card">
                        <?php
                            $numImagenes = 40; // Cantidad de imágenes
                            $i = $i + 1;
                            $imagenURL = $i . ".jpg"; // Generar el nombre de la imagen
                        ?>
                        <img src="..\..\img\<?= $imagenURL ?>" class="card-img-top" alt="..." style="height: 21rem; width: auto;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['nombre'] ?> <?= $row['apellido'] ?></h5>
                                <p class="card-text">Propietario de barco <?= $row_barco["nombre_barco"] ?></p>
                                <p class="card-text"><?= $row['correo_electronico'] ?></p>
                                <a href="#" class="btn btn-primary">Ver Todos</a>
                            </div>
                    </div>

                <br>
            <?php endwhile; ?>
    </div>
    <br>
    </div>

<?php include("../../paginas/plantillas/footer.php"); ?>