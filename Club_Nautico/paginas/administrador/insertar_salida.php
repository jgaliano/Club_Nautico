<?php 

    include('../conecction.php');
    $con = connection();

    $consultar ="select * from salidas";

    $query = mysqli_query($con, $consultar);

    include("../../paginas/plantillas/section_superior_2.php");
?>


<div class="grid text-center" style="--bs-columns: 3;">
        <form action="insertarSalida.php" method="POST">
            <h1 class="text-center">Ingrese Salida</h1>
            <p>Para insertar una salida se debe de tener presente el ID del barco al que pertence, si se coloca de forma aleatoria, la salida no se asignará a ningún barco e indicará un mensaje de error</p>
            <p>Si desea consultar los id's de barcos existentes favor visitar la pagina "Insertar Barco", a la cual puede tener acceso desde la sección "Admin"</p>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="id" placeholder="ID_Barco" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="fecha" placeholder="Fecha de Salida YYYY-MM-DD" class="form-control" required>
                </div>
                <div class="col">
                    <input type="text" name="hora" placeholder="Hora de Salida" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="destino" placeholder="Destino" class="form-control" required>
                </div>
                <input type="submit" value="Agregar Salida" class="btn btn-info">
            </div>
        </form>
    </div>
    <br>
    <div  class="grid text-center" style="--bs-columns: 3;">
        <h2>Salidas Resgistradas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID_Salida</th>
                    <th scope="col">ID_Barco</th>
                    <th scope="col">Fecha Salida</th>
                    <th scope="col">Hora Salida</th>
                    <th scope="col">Destino</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['id_salida'] ?> </th>
                        <th> <?= $row['id_barco'] ?> </th>
                        <th> <?= $row['fecha_salida'] ?> </th>
                        <th> <?= $row['hora_salida'] ?> </th>
                        <th> <?= $row['destino'] ?> </th>

                        <!-- <th ><a href="actualizarCliente.php?id= <?= $row['id_numeroCliente']?>"class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Actualizar</a></th> -->
                        <th><a href="eliminar_salida.php?id= <?= $row['id_salida']?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>