<!DOCTYPE html>
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
                            <li class="scroll"><a href="Regisro.php">ingreso</a></li>  
                            <li class="scroll"><a href="servicios.php">Servicios</a></li> 
                            <li class="scroll"><a href="Team.php">Team</a></li>
                            <li class="scroll"><a href="Blog.php">proveedores</a></li>

                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header>
        <section id="services">
            <div class="container">
                <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <center>
                            <FORM method=GET action="http://www.google.es/search"> 
                                <fieldset> 
                                    <input type=hidden name=ie value=UTF-8 /> 
                                    <input type=hidden name=oe value=UTF-8 /> 

                                    <INPUT TYPE=text id="s" name="q" value="" size="50" /> 
                                    <font size=-1> 

                                    <input type=hidden name=domains value="http://www.quirumed.com/es/instrumental-quirurgico" /><br> 
                                    <input type=radio name=sitesearch value="" /> En todo Internet</br> 
                                    <input type=radio name=sitesearch value="http://www.quirumed.com/es/instrumental-quirurgico" checked /> En quirumed.Com 

                                    <INPUT type=submit  id="x" name=btnG VALUE="Buscar" /> 
                                    </font> 
                                </fieldset> 
                            </FORM> 
                        </center>
                        <center>
                            <div class="ServOfre float_r">
                                <h2>Material Quirurgico</h2>
                                <div class="ServOfre">
                                    <div class="cajaServicio caja1">
                                        <img src="images/productos/09.png" alt="Image 3"  width="100"/>
                                        <a href="producto.php"> CENTRALES DE ESTERILIZACIÓN</a><h6>es un lugar físico diagramado especialmente para esterilizar a todo el Centro de Salud.</h6></div>
                                </div>
                                <div class="ServOfre">
                                    <div class="cajaServicio caja2">
                                        <img src="images/productos/10.png"  alt="Image 3" width="100" />
                                        <a href="producto.php"> TIJERAS METZENBAUM</a><h6> están diseñadas con un alcance extralargo y una longitud de hoja más pequeña e intrincada.</h6></div>
                                </div>
                                <div class="ServOfre">
                                    <div class="cajaServicio caja3">
                                        <img src="images/productos/11.png"  alt="Image 3" width="100"/>
                                        <a href="producto.php"> CAMILLA QUIRURGICA</a><h6>cama para recibir al paciente que ha sido intervenido quirúrgicamente o pacientes graves inconscientes.</h6></div>
                                </div>
                                <div class="ServOfre">
                                    <div class="cajaServicio caja3">
                                        <img src="images/productos/12.png"  alt="Image 3" width="100"/>
                                        <a href="producto.php">BANDEJAS CLINICAS </a><h6>se utilizan para transportar instrumentos quirúrgicos</h6></div>
                                </div>

                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </section><!--/#services-->
        <footer id="footer">
            <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="container text-center">
                    <div class="footer-logo">
                        <a href="index.php"><img class="img-responsive" src="images/logo.png" alt=""></a>
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
                            <p>&copy; 2016 Farmacol.</p>
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

    </body>
</html>