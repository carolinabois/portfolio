<?php 
$pg = "contacto" ;
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

<body id="contacto">
    <header>
        <div class="container">
            <?php include_once ("menu.php") ; ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-sm-5 mt-4">
                    <p>Para más detalles sobre mi
                        trabajo podés ver mi Linkedin,
                        descargar mi CV o mandarme
                        un mensaje.</p>
                    <div class="row">
                        <div class="col-6 text-center my-4 my-sm-4">
                            <a href="files/Carolina Bois CV 2020.pdf" class="btn">Descarga mi CV</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 offset-sm-1 mt-4">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control shadow"
                                placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control shadow"
                                placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="5" class="form-control shadow"
                                placeholder="Comentarios"></textarea>
                        </div>
                        <div class="text-right mt-4">
                            <button type="submit" class="btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-12 col-sm text-sm-left text-center pb-sm-0 pb-2">
                    <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/carolinabois" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a href="https://api.Whatsapp.com/send?phone=5492345411692" target="_blank" title="Whatsapp"><i
                            class="fab fa-whatsapp"></i></a>
                    <a href="mailto:carobois.7@gmail.com" target="_blank" title="Email"><i
                            class="far fa-envelope"></i></a>
                </div>
                <div class="col-12 col-sm text-sm-center text-center">
                    <a href="mailto:carobois.7@gmail.com">info@carolinabois.com.ar</a>
                </div>
                <div class="col-12 col-sm text-sm-right text-center">
                    Sponsor <a href="https://depsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
                </div>

            </div>

        </div>
    </footer>


</body>

</html>