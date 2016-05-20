
<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Farmacol</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/favicon.ico">
    </head><!--/head-->

    <body>

        <!--.preloader-->
        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
        <header>
            <div class="main-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll active"><a href="Login.php">Home</a></li>
                            <li class="scroll"><a href="servicios.php">Servicios</a></li> 
                            <li class="scroll"><a href="Team.php">Team</a></li>
                            <li class="scroll"><a href="#blog">proveedores</a></li>
                            <li class="scroll" ><a href="compras.php"><img src="images/carro.png"></a></li>

                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header>
        <section id="contact">

            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Iniciar Sesion</h2>
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6">
                                <form id="" name="contact-form"  method="post" action="php/autenticacion.php" >
                                    <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="nickname">Nombre de usuario </label>
                                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario">
                                            </div>
                                            <div class="form-group">
                                                <label for="contrasena">Contrase&ntilde;a</label>
                                                <input type="password" class="form-control" id="contra1" name="contra1" placeholder="Contrase&ntilde;a">
                                            </div>
                                            <div class="form-group">
                                                <a href="servicios.php" class="btn btn-lg btn-primary">entrar</a>
                                                <p>si no tiene cuenta <a href="Registro.php">Registrarse</a></p>
                                            </div>
                                            </form>   
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>        
                    </section><!--/#contact-->
                    
                    <footer id="footer">
                        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="container text-center">
                                <div class="footer-logo">
                                    <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
                                </div>
                                <div class="social-icons">
                                    <ul>
                                        <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>&copy; 2016 Oxygen Theme.</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="pull-right">Crafted by <a href="http://designscrazed.org/">Allie</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>

                    <script type="text/javascript" src="js/jquery.js"></script>
                    <script type="text/javascript" src="js/bootstrap.min.js"></script>
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
                    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
                    <script type="text/javascript" src="js/wow.min.js"></script>
                    <script type="text/javascript" src="js/mousescroll.js"></script>
                    <script type="text/javascript" src="js/smoothscroll.js"></script>
                    <script type="text/javascript" src="js/jquery.countTo.js"></script>
                    <script type="text/javascript" src="js/lightbox.min.js"></script>
                    <script type="text/javascript" src="js/main.js"></script>
                     <script src="js/valida_login.js"></script>

                    </body>
                    </html>