<?php 
$pg = "proyectos" ;
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

<body id="proyectos">
    <header>
        <div class="container">
            <?php include_once ("menu.php") ; ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4">
                    <h1>Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Estos son algunos de los trabajos que he realizado:</p>
                </div>
                <div class="row mb-3">
                    <div class="box col-sm-4 col-12 px-5">
                        <div class="row card mt-4 shadow">
                            <div class="col-12">
                                <img src="images/abmclientes.png" alt="ABM Clientes" title="ABM Clientes"
                                    class="img-fluid">
                            </div>
                            <div class="col-12 subtitulo color-gradiente shadow">
                                <h2>ABM CLIENTES</h2>
                            </div>
                            <div class="col-12 py-3">
                                <p>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML,
                                    CSS, PHP, Bootstrap y Json.
                                </p>
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-left">
                                        <button class="btn">VER PROYECTO</button>
                                    </div>
                                    <div class="col-12 col-sm-6 text-right">
                                        <a href="">CÓDIGO FUENTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box col-sm-4 col-12 px-5">
                        <div class="row card mt-4 shadow">
                            <div class="col-12">
                                <img src="images/abmventas.png" alt="Sistema de gestion de ventas"
                                    title="Sistema de gestion de ventas" class="img-fluid">
                            </div>
                            <div class="col-12 subtitulo color-gradiente shadow">
                                <h2>SISTEMA DE GESTION DE VENTAS</h2>
                            </div>
                            <div class="col-12 py-3">
                                <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                    Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.
                                </p>
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-left">
                                        <button class="btn">VER PROYECTO</button>
                                    </div>
                                    <div class="col-12 col-sm-6 text-right">
                                        <a href="">CÓDIGO FUENTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box col-sm-4 col-12 px-5">
                        <div class="row card mt-4 shadow ">
                            <div class="col-12">
                                <img src="images/sistema-admin.png" alt="Proyecto Final" title="Proyecto Final"
                                    class="img-fluid">
                            </div>
                            <div class="col-12 subtitulo color-gradiente shadow">
                                <h2>PROYECTO INTEGRADOR</h2>
                            </div>
                            <div class="col-12 py-3">
                                <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML,
                                    CSS, con panel administrador, gestor de usuarios, módulo de permisos y
                                    funcionalidades a fines.
                                </p>
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-left">
                                        <button class="btn">VER PROYECTO</button>
                                    </div>
                                    <div class="col-12 col-sm-6 text-right">
                                        <a href="">CÓDIGO FUENTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </main>
    <?php include_once ("footer.php") ; ?>
</body>

</html>