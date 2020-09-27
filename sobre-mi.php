<?php 
$pg = "sobre-mi" ;
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

<body id="sobre-mi">
    <header>
        <div class="container">
            <?php include_once ("menu.php") ; ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4">
                    <h1>Sobre mí</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-5 mt-3">
                    <p class="my-3">
                        Ingeniera industrial, apasionada por la optimización <br>
                        y digitalización de los procesos mediante el<br>
                        uso de la tecnología.</p>
                    <div class="py-4">
                        <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/carolinabois" target="_blank" title="Linkedin"><i
                                class="fab fa-linkedin-in"></i></a>

                        <a href="files/Carolina Bois CV 2020.pdf" class="btn">Descarga mi CV</a>
                    </div>
                </div>
                <div class="col-12 col-sm-3 offset-sm-2 ">
                    <img src="images/profilephoto.png" alt="Carolina bois" title="Carolina Bois"
                        class="img-fluid img-circle">
                </div>
            </div>
        </div>

        <section id="tecnologias" class="pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-3">
                        <h2>Tecnologías de programación</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-5 card">
                        <img src="https://img.stackshare.io/service/1209/javascript.jpeg" alt="JavaScript"
                            class="align-center">
                        <h3>Javascript</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg" alt="PHP"
                            class="css-f7vc2b">
                        <h3>PHP</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/2538/kEpgHiC9.png" alt="HTML5" class="css-f7vc2b">
                        <h3>HTML5</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/1020/OYIaJ1KK.png" alt="React" class="css-f7vc2b">
                        <h3>React.js</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg" alt="jQuery"
                            class="css-f7vc2b">
                        <h3>JQuery</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        <h3>bootstrap</h3>
                    </div>

                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/4588/0N0srAVN_400x400.jpg">
                        <h3>Laravel</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png" alt="MariaDB logo"
                            class="css-1m5j888">
                        <h3>MariaDB</h3>

                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/6727/css.png">
                        <h3>CSS</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/1025/logo-mysql-170x170.png" alt="MySQL logo"
                            class="css-1m5j888">
                        <h3>MySQL</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/1051/fab.os.logo.apache.200.15011_400x400.jpg">
                        <h3>Apache</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/27/sBsvBbjY.png" alt="GitHub" class="css-f7vc2b">
                        <h3>Git</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/4770/1338505.png" alt="HeidiSQL logo"
                            class="css-1m5j888">
                        <h3>Heidi SQL</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/642/SublimeText_Master_012312_icon.png">
                        <h3>Sublime Text</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/1631/XAMPP_128.png" alt="XAMPP logo"
                            class="css-1m5j888">
                        <h3>XAMPP</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/11439/eDptbJRW_400x400.png" alt="WordOps logo"
                            class="css-1m5j888">
                        <h3>catia</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/4167/icon.png" alt="Microsoft Office 365 logo"
                            class="css-1m5j888">
                        <h3>Microsoft Office</h3>
                    </div>
                    <div class="col-sm-2 col-5 card ">
                        <img src="https://img.stackshare.io/service/12695/D78-IV9i_400x400.jpg">
                        <h3>Salesforce</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="idiomas">
            <div class="container">
                <div class="row py-5">
                    <div class="card col-12 col-sm-6">
                        <div class="row">
                            <div class="col-4">
                                <i class="fas fa-comment-alt"></i>
                            </diV>
                            <div class=" col-8">
                                <h2>IDIOMAS</h2>
                                <p>
                                    ESPAÑOL - Nativo <br>
                                    INGLES - B2 <br>
                                    ALEMAN - A2
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" card col-12 col-sm-6  ">
                        <div class="row">
                            <div class="col-4">
                                <i class="fas fa-star"></i>
                            </diV>
                            <div class="col-8 ">
                                <h2>HOBBIES</h2>
                                <p>
                                    DEPORTES - Futbol y Running <br>
                                    ESTUDIAR IDIOMAS - B2
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiencia" class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-gray my-4">
                        <h2><i class="fas fa-briefcase"></i>Experiencia Laboral</h2>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-12 col-sm bg-white shadow">
                        <div class="col-3">
                            <img src="" alt="">

                        </div>
                        <div class="col-9">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facilis, accusamus ab
                                amet incidunt libero ea aspernatur. </p>

                        </div>
                    </div>
                    <div class="col-12 col-sm bg-white  shadow">
                        <div class="col-3">
                            <img src="" alt="">

                        </div>
                        <div class="col-9">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facilis, accusamus ab
                                amet incidunt libero ea aspernatur. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="estudios">
            <div class="container">
                <div class="row py-4">
                    <div class="col-12 text-gray">
                        <h2><i class="fas fa-graduation-cap"></i>Estudios</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 col-sm bg-white shadow">
                        <div class="col-3">
                            <img src="" alt="">

                        </div>
                        <div class="col-9">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facilis, accusamus ab
                                amet incidunt libero ea aspernatur. </p>

                        </div>
                    </div>
                    <div class="col-12 col-sm bg-white shadow">
                        <div class="col-3">
                            <img src="" alt="">

                        </div>
                        <div class="col-9">
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facilis, accusamus ab
                                amet incidunt libero ea aspernatur. </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include_once ("footer.php") ; ?>
</body>

</html>