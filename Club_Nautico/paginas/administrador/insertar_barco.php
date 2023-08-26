<?php 

    include('../conecction.php');
    $con = connection();

    $consultar ="select * from barcos";

    $query = mysqli_query($con, $consultar);

    include("../../paginas/plantillas/section_superior_2.php");
?>


<div class="grid text-center" style="--bs-columns: 3;">
        <form action="insertarBarco.php" method="POST">
            <h1 class="text-center">Ingrese Datos</h1>
            <p>Para insertar un barco se debe de tener presente el ID del socio al que pertence, si se coloca de forma aleatoria, el barco no se asignará a nadie e indicará un mensaje de error</p>
            <p>Si desea consultar los id's de socios existentes favor visitar la pagina "Insertar Socio", a la cual puede tener acceso desde la sección "Admin"</p>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="id" placeholder="ID_Socio" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                </div>
                <div class="col">
                    <input type="text" name="matricula" placeholder="No. Matricula" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="amarre" placeholder="No. Amarre" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="cuota" placeholder="Cuota Amarre" class="form-control" required>
                </div>
                <input type="submit" value="Agregar Barco" class="btn btn-info">
            </div>
        </form>
    </div>
    <br>
    <p>*Por temas administrativos debe confirmar con el propietario del barco para eliminarlo*</p>
    <p>*Por favor ponganse en contacto con el administrador para más información*</p>
    <div  class="grid text-center" style="--bs-columns: 3;">
        <h2>Barcos Resgistrados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID_Barco</th>
                    <th scope="col">ID_Socio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">No. Matricula</th>
                    <th scope="col">No. Amarre</th>
                    <th scope="col">Cuota Amarre</th>
                    <!-- <th scope="col">Eliminar</th> -->
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['id_barco'] ?> </th>
                        <th> <?= $row['id_socio'] ?> </th>
                        <th> <?= $row['nombre_barco'] ?> </th>
                        <th> <?= $row['numero_matricula'] ?> </th>
                        <th> <?= $row['numero_amarre'] ?> </th>
                        <th> <?= $row['cuota_amarre'] ?> </th>

                        <!-- <th ><a href="actualizarCliente.php?id= <?= $row['id_numeroCliente']?>"class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Actualizar</a></th> -->
                        <!-- <th><a href="#" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a></th> -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>