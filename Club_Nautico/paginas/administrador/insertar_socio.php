<?php 

    include('../conecction.php');
    $con = connection();

    $consultar ="select * from socios";

    $query = mysqli_query($con, $consultar);

    include("../../paginas/plantillas/section_superior_2.php");
?>


<div class="grid text-center" style="--bs-columns: 3;">
        <form action="insertarSocio.php" method="POST">
            <h1 class="text-center">Ingrese Datos</h1>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
                </div>
                <div class="col">
                    <input type="text" name="correo" placeholder="Correo" class="form-control" required>
                </div>
                <!-- <div class="col-md-6">
                    <input type="text" name="direccion" placeholder="Dirección" class="form-control" required>
                </div> -->
                <input type="submit" value="Agregar Socio" class="btn btn-info">
            </div>
        </form>
    </div>
    <p>*Por temas administrativos debe confirmar con el presidente del club para eliminar un socio*</p>
    <p>*Por favor ponganse en contacto con el administrador para más información*</p>
    <div  class="grid text-center" style="--bs-columns: 3;">
        <h2>Socios Resgistrados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nit</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <!-- <th scope="col">Dirección</th> -->
                    <!-- <th scope="col">Actualizar</th> -->
                    <!-- <th scope="col">Eliminar</th> -->
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['id_socio'] ?> </th>
                        <th> <?= $row['nombre'] ?> </th>
                        <th> <?= $row['apellido'] ?> </th>
                        <th> <?= $row['correo_electronico'] ?> </th>

                        <!-- <th ><a href="actualizarCliente.php?id= <?= $row['id_numeroCliente']?>"class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Actualizar</a></th> -->
                        <!-- <th><a href="#" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a></th> -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>