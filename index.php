<?php 
$pg = "inicio" ;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="inicio">
    <header>
        <div class="container">
            <?php include_once ("menu.php") ; ?>
        </div>
    </header>
    <main>
        <div class="container principal">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2">
                    <div class="buscador text-gray">
                        <p>Hola mi nombre es <strong> <u>Carolina</u></strong>, soy desarrolladora Full Stack <i
                                class="fas fa-grip-lines-vertical"></i><i class="fas fa-search"></i></p>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once ("footer.php") ; ?>
</body>

</html>