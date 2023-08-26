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
    <title>Inicio</title>
    <style>
        .color_texto{
            color: white;
            font-size: 30px;
        }
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Establece la altura mínima del viewport */
        }

        .content {
            flex: 1; /* Toma el espacio restante */
            /* Estilos adicionales de tu contenido */
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body class="content">
    <header>

    </header>
        
    <nav>
       <ul class="nav justify-content-center" style="background-color: #333">
            <li class="nav-item">
                <a class="nav-link active, color_texto" href="<?php echo $url_base?>">
                    <i class="fa-solid fa-house"></i> Inicio
                </a>
            </li>
            <li>
                <a class="nav-link color_texto" href="<?php echo $url_base?>paginas\viajes\actualizar_viajes.php">
                <i class="fa-solid fa-ship"></i> Viajes
            </a>
            </li>
            <li>
                <a class="nav-link color_texto" href="<?php echo $url_base?>paginas\barcos\actualizar_barcos.php">
                <i class="fa-solid fa-sailboat"></i> Barcos
            </a>
            </li>
            <li>
                <a class="nav-link color_texto" href="<?php echo $url_base?>paginas\socios\actualizar_socios.php">
                <i class="fa-solid fa-handshake"></i> Socios
            </a>
            </li>
       </ul>
    </nav>
    <main class="container">