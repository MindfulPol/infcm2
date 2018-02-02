<?php
if (!empty($_GET['lng'])) {
    $_COOKIE['language'] = $_GET['lng'] === 'es' ? 'es' : 'ca';
} elseif (empty($_COOKIE['language'])) {
      $_COOKIE['language'] = 'es';
}
setcookie('language', $_COOKIE['language']);
if ($_COOKIE['language'] == 'es') {
    include('lang-es.php');
} else {
    include('lang-ca.php');
}
?>
<!doctype html>
<html lang="<?php echo $_COOKIE['language'] ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Infocam Consulting Informàtic</title>
  <meta name="description" content="Infocam Consulting es una empresa dedicada a ofrecer
  servicios informáticos para empresas y particulares">
  
  <link rel="stylesheet" href="webroot/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="webroot/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="webroot/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="webroot/css/style.css" />

  <script src="webroot/js/jquery.min.js"></script>
  <script src="webroot/js/owl.carousel.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="webroot/js/custom.js"></script>
  <script src="webroot/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body id="top">
  <!-- ICONES_TELF-MISG-MARK -->
  <header>
    <div class="call">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-offset-11 col-md-1">
            <a href="index.php?lng=ca"><img src="webroot/img/flag_ca.png"/></a>
            <a href="index.php?lng=es"><img src="webroot/img/flag_esp.jpg"/></a>
          </div>
          <div id="responsive-header2" class="col-xs-12 col-sm-4 text-center">
            <a href="#contacto">
              <div class="circle">
                <span class="glyphicon glyphicon-phone-alt"></span>
              </div>
              <div class="header-text">
                <h4 class="title"><?php echo PREGUNTA_DUDAS; ?></h4>
                <h4 class="subtitle">977639076</h4>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-4 text-center">
            <a href="#contacto">
              <div class="circle">
                <span class="glyphicon glyphicon-envelope"></span>
              </div>
              <div class="header-text">
                <h4 class="title"><?php echo CUENTENOS_SU_PROYECTO; ?></h4>
                <h4 id="responsive-header" class="subtitle">infocam@consulting.com</h4>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-4 text-center">
            <a href="#map">
              <div class="circle">
                <span class="glyphicon glyphicon-map-marker"></span>
              </div>
              <div class="header-text">
                <h4 class="title"><?php echo LOCALIZACION_OFICINA; ?> </h4>
                <h4 class="subtitle">Vila-rodona</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END ICONES_TELF-MISG-MARK -->
  <!-- BARRA NAVEGACIÓ -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php">
          <img class="img-brand" src="webroot/img/logoinfocam3.png" alt="logo infocam"/>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav ">
          <li><a href="#top">HOME</a></li>
          <li><a href="#empresa">EMPRESA</a></li>
          <li><a href="#servicios"><?php echo SERVICIOS; ?></a></li>
          <li><a href="#map"><?php echo LOCALIZACION; ?></a></li>
          <li><a href="#contacto">CONTACTAR</a></li>
          <li><a href="descargas.php"><?php echo DESCARGAS; ?></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END BARRA NAVEGACIÓ -->
  <!-- SECCIÓ IMATGE DE FONS -->
  <section class="section-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 m-top-35">
          <h1>INFOCAM</h1>
          <h4>
            <?php  echo EMPRESA_VALLS; ?>
          </h4>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECCIÓ IMATGE DE FONS -->
  <section class="m-top-45" id="empresa">
    <div class="container content-empresa">
      <div class="row">
        <div class="col-md-12">
          <h1><?php echo NUESTRA_EMPRESA; ?></h1>
          <p>
            <?php echo INFOCAM_CONSULTING_INTRO; ?>
          </p>
        </div>
        <div class="col-md-offset-4 col-md-4">
          <img src="webroot/img/logoepic2.png" class="img-responsive" alt="logo grup epic">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4><?php echo LA_EMPRESA; ?></h4>
          <p>
            <?php echo ABOUT_EMPRESA; ?>
          </p>
          <img src="webroot/img/empresa.jpg" class="img-responsive center-block" alt="logo epic" />
        </div>
        <div class="col-md-4">
          <h4><?php echo EL_EQUIPO; ?></h4>
          <p>
            <?php echo ABOUT_EQUIPO; ?>
          </p>
          <img src="webroot/img/equipo.jpg" class="m-top-30 img-responsive center-block" alt="logo epic" />
        </div>
        <div class="col-md-4">
          <h4><?php echo LA_EXPERIENCIA; ?></h4>
          <p>
            <?php echo ABOUT_EXPERIENCIA; ?>
          </p>
          <img src="webroot/img/redesa.jpg" class="m-top-80 img-responsive center-block" alt="logo epic" />
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION SOLUCIONAMOS -->
  <section class="section-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h3><?php echo SOLUCIONAMOS; ?></h3>
          <p>
            <?php echo ABOUT_SOLUCIONAMOS_1; ?>
          </p>
          <p>
            <?php echo ABOUT_SOLUCIONAMOS_2; ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION SERVICIOS -->
  <section class="section-2" id="servicios">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2><?php echo QUE_SERVICIOS; ?></h2>
        </div>
      </div>
      <!-- m-left-15 aki baix -->
      <div class="row m-top-4 m-bottom-35">
        <div class="col-md-4 text-center fr">
          <a class="service-links" href="servicios.php#soporte">
            <i class="glyphicon glyphicon-cog"></i>
            <h4><?php echo SOPORTE_INFORMATICO; ?></h4>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#redes">
            <i class="glyphicon glyphicon-tasks"></i>
            <h4><?php echo ADMINISTRACION_SISTEMAS; ?></h4>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#lopd">
            <i class="glyphicon glyphicon-lock"></i>
            <h4><?php echo DOCUMENTO_SEGURIDAD; ?></h4>
          </a>
        </div>
      </div>
      <div class="row m-top-4 m-bottom-35">
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#software">
            <i class="glyphicon glyphicon-save-file"></i>
            <h4><?php echo IMPLANTACION_SOFTWARE; ?></h4>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#alojamientos">
            <i class="glyphicon glyphicon-inbox"></i>
            <h4><?php echo ALOJAMIENTOS; ?></h4>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#hardware">
            <i class="glyphicon glyphicon-print"></i>
            <h4><?php echo VENTA_HARDWARE; ?></h4>
          </a>
        </div>
      </div>
      <div class="row m-top-4 m-bottom-35">
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#cloud">
            <i class="glyphicon glyphicon-cloud"></i>
            <h4><?php echo SERVICIOS_CLOUD; ?></h4>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#recuperacio">
            <i class="glyphicon glyphicon-download-alt"></i>
            <h4><?php echo RECUPERACION_DATOS; ?></h4>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a class="service-links" href="servicios.php#auditories">
            <i class="glyphicon glyphicon-list-alt"></i>
            <h4><?php echo AUDITORIAS; ?></h4>
          </a>
        </div>
      </div>
      <div class="row m-top-4 m-bottom-35">
        <div class="col-md-offset-4 col-md-4 text-center">
          <a class="service-links" href="servicios.php#telefonia">
            <i class="glyphicon glyphicon-signal"></i>
            <h4><?php echo TELEFONIA; ?></h4>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row carousel">
        <div class="col-md-12">
          <h2><?php echo TRABAJAMOS_CON; ?></h2>
          <div id="carousel-section" class="owl-carousel owl-theme">
            <div class="item">
              <img src="webroot/img/logoepic2.png" alt="epic" />
            </div>
            <div class="item">
              <img style="margin-top: 48px" src="webroot/img/kaspersky.png" alt="kaspersky" />
            </div>
            <div class="item">
              <img style="margin-top: 48px" src="webroot/img/nodesest.jpg" alt="node"/>
            </div>
            <div class="item">
              <img src="webroot/img/asus.jpg" alt="asus" />
            </div>
            <div class="item">
              <img src="webroot/img/epson.png" alt="epson" />
            </div>
            <div class="item">
              <img src="webroot/img/hp.png" alt="hp" />
            </div>
            <div class="item">
              <img src="webroot/img/intel.png" alt="intel" />
            </div>
            <div class="item">
              <img src="webroot/img/linksys.jpeg" alt="linksys" />
            </div>
            <div class="item">
              <img src="webroot/img/logitech.jpg" alt="logitech" />
            </div>
            <div class="item">
              <img src="webroot/img/ovislink.png" alt="ovislink" />
            </div>
            <div class="item">
              <img src="webroot/img/Panda.png" alt="panda security" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION 4 -->
  <section class="section-4">
    <div class="container">
      <div class="row m-bottom-15">
        <div class="col-md-offset-2 col-md-8 m-top-15">
          <h4><?php echo NOS_ENCONTRARAS; ?></h4>
          <p>
            Infocam Consulting Informàtic | C/ Doctor Ferrer Nº6 Baixos | (43814) Vila-rodona (Tarragona)
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div id="map">
        </div>
      </div>
    </div>
  </section>
  <section id="contacto">
    <div class="container contacto">
      <div class="row">
        <div class="col-md-12 center-block">
          <h4><?php echo PONGANSE_EN_CONTACTO; ?></h4>
          <p class="omg">
            infocam@infocamconsulting.com
          </p>
          <p class="omg">
            <strong>Tel.</strong> 977 63 90 · <strong>Fax.</strong> 977 63 80 73 · <strong>
                <?php echo MOVILES; ?></strong> 637 49 15 00 · 619 43 08 80
          </p>
          <form method="post" action="mail.php">
            <label><?php echo NOMBRE_APELLIDOS; ?></label>
            <input type="text" class="form-control" name="nombre" />
            <label>Empresa</label>
            <input type="text" class="form-control" name="empresa" />
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" />
            <label><?php echo TELEFONO; ?></label>
            <input type="number" class="form-control" name="tel" />
            <label>Web</label>
            <input type="text" class="form-control" name="web" />
            <label><?php echo MENSAJE; ?></label>
            <textarea name="mensaje" class="form-control"></textarea>
            <!-- google recaptchav2 -->
            <div class="m-top-5">
              <div class="g-recaptcha" data-sitekey="6LcEyT8UAAAAAExFpqC2GsMzfYQ2C6LEADKxQkrv"></div>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Enviar</button>
          </form>
          <p class="casi-nadie-lo-lee-lol m-bottom-25">
            <?php echo CONDICIONES_FORM; ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container-fluid">
      <div class="row m-top-15">
        <div class="col-md-3">
          <img src="webroot/img/logoepic2.png"  alt="logo epic" />
        </div>
        <div class="col-md-3">
          <h4>Infocam Consulting</h4>
          <h5><?php echo ASESORIA; ?></h5>
          <h5><?php echo VENTA_REPARACIONES; ?></h5>
          <h5><?php echo TELECOMUNICACIONES_TELEFONIA_IP; ?></h5>
          <h5><?php echo TPV_SOFTWARE_GESTION; ?></h5>
          <h5><?php echo SERVICIOS_CLOUD_FOOTER; ?></h5>
          <h5><?php echo SOLUCIONES_CLOUD; ?></h5>
        </div>
        <div class="col-md-3">
          <h4><?php echo TRABAJAMOS_CON ?></h4>
          <div id="carousel-footer" class="owl-carousel owl-theme">
            <img class="item" style="width:90px" src="webroot/img/logoepic2.png" alt="epic" />
            <img class="item" style="width:90px" src="webroot/img/kaspersky.png" alt="kaspersky" />
            <img class="item" style="width:90px" src="webroot/img/asus.jpg" alt="asus" />
            <img class="item" style="width:90px" src="webroot/img/epson.png" alt="epson" />
            <img class="item" style="width:90px" src="webroot/img/hp.png" alt="hp" />
            <img class="item" style="width:90px" src="webroot/img/intel.png" alt="intel" />
            <img class="item" style="width:90px" src="webroot/img/linksys.jpeg" alt="linksys" />
            <img class="item" style="width:90px" src="webroot/img/logitech.jpg" alt="logitech" />
            <img class="item" style="width:90px" src="webroot/img/ovislink.png" alt="ovislink" />
            <img class="item" style="width:90px" src="webroot/img/Panda.png" alt="panda security" />
          </div>
        </div>
        <div class="col-md-3">
          <h4><?php echo CUENTENOS_SU_PROYECTO; ?></h4>
          <h5>infocam@infocamconsulting.com</h5>
          <h5>Tel · 977 63 90 76</h5>
          <h5>Fax · 977 63 80 73</h5>
          <h5><?php echo MOVILES; ?> · 637 49 15 00 / 619 43 08 80</h5>
        </div>
      </div>
    </div>

  </footer>
  <!-- Flecha Scroll (back-to-top{display:none} -> activamos con jQuery)-->
  <a id="back-to-top" href="#" class="back-to-top"></a>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKrpSmQK6H9freVyfKwgp6z3l5C7XCMYc&callback=initMap" async defer></script>
</body>

</html>
