<?php 
    $url_base = "http://localhost:3000/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a8ca155780.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Document</title>
    <style>
        head{
            background-color: black;
        }
        html{
            background-color: black;
        }
        *{
            background-color: black;
        }
    </style>
</head>
<body>
    <div style="background-color: black; heigth: 500px">
    <div style="margin-top: 250px;">
    <nav>
       <ul class="nav justify-content-center" style="background-color: black; font-size: 25px;">
            <li class="nav-item">
                <a class="nav-link active, color_texto" href="<?php echo $url_base?>paginas\administrador\insertar_socio.php" style="color: white">
                <i class="fa-solid fa-gear"></i> Insertar Socio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active, color_texto" href="<?php echo $url_base?>paginas\administrador\insertar_barco.php" style="color: white">
                <i class="fa-solid fa-screwdriver-wrench"></i> Insertar Barco
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active, color_texto" href="<?php echo $url_base?>paginas\administrador\insertar_salida.php" style="color: white">
                <i class="fa-solid fa-wrench"></i> Insertar Salida
                </a>
            </li>
       </ul>
    </nav>
    </div>
    </div>
</body>
</html>






