<?php
$servidor= "localhost";
$usu= "id11166857_root";
$clave="Ajce3rgx";
$basedatos="id11166857_cv";
$enlace =mysqli_connect($servidor, $usu, $clave, $basedatos);
if(!$enlace){
	echo "Error de conexion";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online CV - Jorge Matzar</title>

    <!-- favicon -->
    <link href="favicon.PNG" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1>Hola, Soy Jorge Matzar!</h1>

            <p class="lead">Ingeniero en Sistemas</p>
            <ul class="social-icon">
                <li><a href="https://es-la.facebook.com/JORGMTZAR"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/jorgmtzar/?hl=es-la"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="https://wa.me/50257555567?text=Me%20gustaría%20saber%20más%20de%20ti"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="profile-img"></div>
    </header>
    <!-- .header-->
</div>


<div class="right-col-block blocks">
<section class="intro section-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Quién soy yo</h2>
                </div>
            </div>
            <div class="col-md-12">
                <p>
                    Estudiante de Ingeniería en Sistemas de Información, de la Universidad Mariano Galvez.
                    Me Considero una persona responsable, honesta, proactiva, perseverante, que durante el
                    transcurso de la carrera he obtenido una aplia gama de conociminetos que me dan la facultad
                    para poder desempeñar cargos en los cuales poder seguir desarollandome profesionalmente.

                </p>
            </div>
        </div>
    </div>
</section>


<section class="section-wrapper skills-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Manejo de Programas</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="progress-wrapper">

                    <div class="progress-item">
                        <span class="progress-title">HTML</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 100%"><span class="progress-percent"> 100%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">CSS</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%"><span class="progress-percent"> 90%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title">JavaScript</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;"><span class="progress-percent"> 80%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title">SQL</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;"><span class="progress-percent"> 80%</span>
                            </div>
                        </div>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->
                    <div class="progress-item">
                        <span class="progress-title">PHP</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 50%;"><span class="progress-percent"> 50%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->

                </div>
                <!-- /.progress-wrapper -->
            </div>
        </div>
        <!--.row -->
    </div>
    <!-- .container-fluid -->
</section>
<!-- .skills-wrapper -->

<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Experiencia Laboral</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>2018 - Actual</small>
                    <h3>Emprendedor</h3>
                    <h4>Servicio Tecnico en terminales moviles y liberaciones</h4>

                    <p>Guatemala, Guatemala</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2016 - 2017</small>
                    <h3>Asistente IT</h3>
                    <h4>Asistente de IT en empresa de Recursos humanos HRCEnter</h4>

                    <p>Guatemala, Guatemala</p>
                </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-experience -->

<section class="section-wrapper section-education">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Educación</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>2013 - 2019</small>
                    <h3>Ingenieria en Sistemas de Información</h3>
                    <h4>Universidad Mariano Galvez</h4>

                    <p>Guatemala, Guatemala</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2010 - 2012 </small>
                    <h3>Bachillerato en Ciencias y Letras con Orientacion en Computación</h3>
                    <h4>Instituto Evangelico America Latina</h4>

                    <p>Guatemala, Guatemala</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2006 - 2009</small>
                    <h3>Nivel Basico</h3>
                    <h4>Instituto Evangelico América Latina</h4>

                    <p>Guatemala, Guatemala</p>
                </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-education -->

<section class="section-wrapper section-interest gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Intereses</h2>
                </div>
            </div>
        </div>
        <!-- .row -->

        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <h3>Estudios</h3>

                    <p>Me gustaria poder continuar con estudios en maestria en Ingeniería forence y poder poder obtener un empleo de perito </p>
                </div>
                <div class="content-item">
                    <h3>Deportes</h3>

                    <p>Unos de los deporte favoritos es el ciclismo y natación aunque ya no praticos estos deportes con regulardiad
                        si me gustaria seguri practicando ciclismo.
                    </p>

                </div>
            </div>
        </div>
        <!-- .row -->

    </div>
</section>
<!-- .section-publications -->

<section class="section-wrapper portfolio-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Certificados</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a class="portfolio-item" href="#">
                    <div class="portfolio-thumb">
                        <img src="img/HTML_certificate.jpeg" alt="">
                    </div>

                    <div class="portfolio-info">
                        <h3>Certificado HTML</h3>
                        <small>https://www.sololearn.com/</small>
                    </div>
                    <!-- portfolio-info -->
                </a>
                <!-- .portfolio-item -->
            </div>
            <div class="col-md-6">
                <a class="portfolio-item" href="#">
                    <div class="portfolio-thumb">
                        <img src="img/CSS_certificate.jpeg" alt="">
                    </div>

                    <div class="portfolio-info">
                        <h3>Certificado CSS</h3>
                        <small>https://www.sololearn.com/</small>
                    </div>
                    <!-- portfolio-info -->
                </a>
                <!-- .portfolio-item -->
            </div>
            <div class="col-md-6">
                <a class="portfolio-item" href="#">
                    <div class="portfolio-thumb">
                        <img src="img/CPlusPlus_certificate.jpeg" alt="">
                    </div>

                    <div class="portfolio-info">
                        <h3>Certificado C++</h3>
                        <small>https://www.sololearn.com/</small>
                    </div>
                    <!-- portfolio-info -->
                </a>
                <!-- .portfolio-item -->
            </div>


        </div>
        <!-- /.row -->
    </div>
</section>
<!-- .portfolio -->

<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Contactame</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <address>
                    <strong>Dirección</strong><br>
                    7av. 14-42 Zona 13 Aurora 1<br>
                    Guatemala, Guatemal 01013
                </address>
                <address>
                    <strong>Número Telefonico</strong><br>
                    +502 5755 5567
                </address>

                <address>
                    <strong>Numero Telefonico</strong><br>
                    +502 3514 1410
                </address>
                <address>
                    <strong>Correo</strong><br>
                    <a href="mailto:#">jorgematzar@gmail.com</a>
                </address>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="feedback-form">
                    <h2>Deja un Mensaje</h2>

                    <form id="contactForm" action="sendemail.php" method="POST">
                        <div class="form-group">
                            <label for="InputName">Nombre</label>
                            <input type="text" name="name" required="" class="form-control" id="InputName"
                                   placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Correo Electronico</label>
                            <input type="email" name="email" required="" class="form-control" id="InputEmail"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Asunto</label>
                            <input type="text" name="subject" class="form-control" id="InputSubject"
                                   placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Mensaje</label>
                            <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                      placeholder="Escriba su Mensaje"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"name="envio">Enviar</button>
                    </form>
                </div>
                <!-- .feedback-form -->


            </div>
        </div>
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->

<footer class="footer">
    <div class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">&copy; 2019 Online CV. All rights reserved | Design By: JORGMTZAR </div>
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->

<?php
if(isset($_POST['envio'])){
    $nombre=$_POST["name"];
    $correo=$_POST["email"];
    $asunto=$_POST["subject"];
    $mensaje=$_POST["message"];

    $insertard = "INSERT INTO contacto VALUES('$nombre','$correo','$asunto','$mensaje')";
    $ejecutar = mysqli_query($enlace,$insertard);
    if(!$ejecutar){
        echo"ERROR EN SQL";
    }
}
?>
<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>