<!DOCTYPE html>
<html>
  <head>
      <script src="//www.parsecdn.com/js/parse-1.3.1.min.js"></script>

      
      
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
       <title>OneWay</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
     <link href="css/index.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <style>
      
    </style>
    <title>Places search box</title>
      <script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?libraries=visualization,places&sensor=true_or_false">
</script>
    
  
  </head>
      <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-github"></i></i>  <span class="light"><Bienvenidos></Bienvenidos></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#visualiza"><i class="fa fa-map-marker"> Visualiza</i></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#denuncia"><i class="fa fa-taxi"> Denuncia</i></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#alerta"><i class="fa fa-share-alt"> Alerta</i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="img/oneway.png" alt="OneWay" width="150dp">
                        <h1 class="brand-heading">OneWay</h1>
                        <p class="intro-text"><span class="subrayado">Muévete seguro y tranquilo por el DF. <br> Mapea, visualiza y alerta a tus amigos.</span>                </p>
                        <a href="#visualiza" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sección Visualiza -->
    <section id="visualiza" class="container content-section text-center">
        <div class="content-section">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Zonas de riesgo</h2> 
                <p>Mapea o visualiza puntos de asalto.</p>
            </div>
            
        </div>
        
    </section>
      <div id="panel">
    <b>Start: </b>
 <select id="start" onchange="calcRoute();">
<option value="Azcapotzalco">Azcapotzalco</option>
<option value="Coyoacan</">Coyoacan</option>
<option value="Cuajimalpa de Morelos">Cuajimalpa de Morelos</option>
<option value="Gustavo A. Madero">Gustavo A. Madero</option>
<option value="Iztacalco">Iztacalco</option>
<option value="Iztapalapa">Iztapalapa</option>
<option value="La Magdalena Contreras">La Magdalena Contreras</option>
<option value="Milpa Alta">Milpa Alta</option>
<option value="Alvaro Obregon">Alvaro Obregon</option>
<option value="Tlahuac">Tlahuac</option>
<option value="Tlalpan">Tlalpan</option>
<option value="Xochimilco">Xochimilco</option>
<option value="Benito Juarez">Benito Juarez</option>
<option value="Cuauhtemoc">Cuauhtemoc</option>
<option value="Miguel Hidalgo">Miguel Hidalgo</option>
<option value="Venustiano Carranza">Venustiano Carranza</option>
    </select>
    <b>End: </b>
    <select id="end" onchange="calcRoute();">
<option value="Azcapotzalco">Azcapotzalco</option>
<option value="Coyoacan">Coyoacan</option>
<option value="Cuajimalpa de Morelos">Cuajimalpa de Morelos</option>
<option value="Gustavo A. Madero">Gustavo A. Madero</option>
<option value="Iztacalco">Iztacalco</option>
<option value="Iztapalapa">Iztapalapa</option>
<option value="La Magdalena Contreras">La Magdalena Contreras</option>
<option value="Milpa Alta">Milpa Alta</option>
<option value="Alvaro Obregon">Alvaro Obregon</option>
<option value="Tlahuac">Tlahuac</option>
<option value="Tlalpan">Tlalpan</option>
<option value="Xochimilco">Xochimilco</option>
<option value="Benito Juarez">Benito Juarez</option>
<option value="Cuauhtemoc">Cuauhtemoc</option>
<option value="Miguel Hidalgo">Miguel Hidalgo</option>
<option value="Venustiano Carranza">Venustiano Carranza</option>
    </select>
    </div>
     <input id="pac-input" style="color:black" class="controls" type="text" placeholder="Search Box">
    <div id="map-canvas" style="height: 400px; width: 100%; margin-top: 10px;"></div>
    
    <!-- Sección Denuncia -->
    <div id="Denuncia">
    <section id="denuncia" class="container content-section text-center">
        <div class="content-section">
            <div class="col-lg-8 col-lg-offset-2"> 
                <h2>Es hora de actuar</h2>
                <p>Lo que no se conoce, no se puede resolver: </p>
                <p>¡Denuncia y hagamos el cambio juntos!</p>
                <div class="denuncialos">
                <form method="post" id="fdenuncia" action="">
                    <input type="text" name="nombre" id="nombre" placeholder="Tu nombre es opcional"><br><br>
                    <textarea name"textarea" id="textarea" placeholder="Descripción de los hechos..."></textarea><br>
                    <input type="button" name="send" id="send" value="Denunciar" onClick="denuncia()">
                </form>
                </div>
            </div>
            
        </div>
    </section>
    </div>

     <!-- Sección Alerta -->
    <section id="alerta" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2><span style="text-shadow: 4px 0px #000000">La seguridad está en tus manos<span></h2>
                    <p><span class="subrayado">Invita a tus amigos y sé parte del cambio.</span></p>
                    <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="" class="btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Code at MXHacks - 2014</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script src="js/denuncia.js"></script>
            
  </body>
</html>