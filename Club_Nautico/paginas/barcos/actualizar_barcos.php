<?php 

    include('../conecction.php');
    $con = connection();

    $consultar ="select * from barcos";

    $query = mysqli_query($con, $consultar);

    include("../../paginas/plantillas/section_superior.php");
    include("../../paginas/plantillas/logo.php");
    include("../../paginas/plantillas/header.php");

    $i = 0;
?>


    <div  class="grid text-center" style="--bs-columns: 3;">
    <br>
        <!-- <h2>Barcos Registrados</h2> -->
            <?php while($row = mysqli_fetch_array($query)): ?>
                <div class="card mb-3" style="max-width: 1040px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <?php
                            $numImagenes = 40; // Cantidad de imágenes
                            $i = $i + 1;
                            $imagenURL = $i . ".jpg"; // Generar el nombre de la imagen
                        ?>
                        <img src="..\..\img\<?= $imagenURL ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['nombre_barco'] ?></h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Información oficial: Número de matricula =  <?= $row['numero_matricula'] ?>, Número de amarre = <?= $row['numero_amarre'] ?>, Cuota de amarre = <?= $row['cuota_amarre'] ?></small></p>
                        </div>
                        </div>
                    </div>
                </div>
             <?php endwhile; ?>
             
    </div>
    <br><br>


<?php include("../../paginas/plantillas/footer.php"); ?>