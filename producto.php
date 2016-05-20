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
        <link rel="stylesheet" href="estilos.css">
        <!-- End WOWSlider.com HEAD section -->

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
        <section id="services">
            <div class="container1">

                <div id="slider1">
                    <div><img style="float:center" src="images/slider1/.jpg" ></div>
                    <div><img src="images/slider1/.jpg" align="center"></div>
                    <div><img src="images/slider1/.jpg" align="center"></div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#slider1 div:gt(0)').hide();
                    setInterval(function () {
                        $('#slider1 div:first-child').fadeOut(1000)
                                .next('div').fadeIn(1000)
                                .end().appendTo('#slider1');
                    }, 3000);
                })
            </script>
                            <div class="container2">

                    
                                <h2>Producto</h2>
                                <div class="price1">
                                    $9<span>/Month</span>
                                    
                                <ul>
                                    <li>Free Setup</li>
                                    <li>10GB Storage</li>
                                    <li>100GB Bandwith</li>
                                    <li>5 Products</li>
                                </ul>
                                <a href="#" class="btn btn-lg btn-primary">comprar</a>
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

</body>
</html>