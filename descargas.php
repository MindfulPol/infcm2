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
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Infocam Consulting Informàtic - <?php echo DESCARGAS_LOWERCASE; ?></title>
  <meta name="description" content="Selección del mejor software gratuito">

  <link rel="stylesheet" href="webroot/css/bootstrap.min.css" />
  <link rel="stylesheet" href="webroot/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="webroot/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="webroot/css/style.css" />

  <script src="webroot/js/jquery.min.js"></script>
  <script src="webroot/js/owl.carousel.min.js"></script>
  <script src="webroot/js/bootstrap.min.js"></script>
  <script src="webroot/js/custom.js"></script>

</head>

<body>
  <header>
    <div class="call hidden-md hidden-lg hidden-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-11 col-md-1">
            <a><img src="webroot/img/flag_ca.png"/></a>
            <a><img src="webroot/img/flag_esp.jpg"/></a>
          </div>
        </div>
        <div class="row">
          <a href="#contacto">
            <div class="col-xs-2">
              <div>
                <i class="glyphicon glyphicon-phone-alt"></i>
              </div>
            </div>
            <div class="col-xs-6">
              <h5 class="responsive-text">977 63 90 76</h5>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="#contacto">
            <div class="col-xs-2">
              <i class="glyphicon glyphicon-envelope"></i>
            </div>
            <div class="col-xs-6">
              <h5 class="responsive-text">infocam@consulting.com</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="call hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-11 col-md-1">
            <a href="index.php?lng=ca"><img src="webroot/img/flag_ca.png"/></a>
            <a href="index.php?lng=es"><img src="webroot/img/flag_esp.jpg"/></a>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="row">
                <a href="#contacto">
                  <div class="col-xs-2">
                    <div class="circle">
                      <i class="glyphicon glyphicon-phone-alt"></i>
                    </div>
                  </div>
                  <div class="col-xs-6  header-text">
                    <h4 class="title"><?php echo PREGUNTA_DUDAS; ?></h4>
                    <h4>977 63 90 76</h4>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="row">
                <a href="#contacto">
                  <div class="col-xs-2">
                    <div class="circle">
                      <i class="glyphicon glyphicon-envelope"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 header-text">
                    <h4 class="title"><?php echo CUENTENOS_SU_PROYECTO ?></h4>
                    <h4>infocam@consulting.com</h4>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="row">
                <a href="#map">
                  <div class="col-xs-2">
                    <div class="circle">
                      <i class="glyphicon glyphicon-map-marker"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 header-text">
                    <h4 class="title"><?php echo LOCALIZACION_OFICINA; ?></h4>
                    <h4>Vila-rodona</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </header>
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
          <li><a href="index.php#top">HOME</a></li>
          <li><a href="index.php#empresa">EMPRESA</a></li>
          <li><a href="index.php#servicios"><?php echo SERVICIOS; ?></a></li>
          <li><a href="index.php#map"><?php echo LOCALIZACION; ?></a></li>
          <li><a href="index.php#contacto">CONTACTAR</a></li>
          <li><a href="descargas.php"><?php echo DESCARGAS; ?></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container descargas">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <h3><?php echo SELECCION_SOFTWARE; ?></h4>
        <h4><?php echo ASISTENCIA_REMOTA; ?></h3>
        <a target="_blank" href="https://www.teamviewer.com/en/download/windows/"><img class="remote" 
          src="webroot/img/remoteblue.png" />Teamviewer</a>
        <a target="_blank" href="https://anydesk.com/download"><img class="remote" 
          src="webroot/img/remotered.png"  />Anydesk</a>
        <p>
          → <a target="_blank" href="http://www.ccleaner.com/ccleaner/download/standard">
            CCleaner</a> 
            <?php echo DESCRIPCION_CCLEANER; ?>
        </p>
        <p>
          → <a target="_blank" href="https://get.adobe.com/es/reader/">Adobe Reader</a>, 
            <?php echo DESCRIPCIO_ADOBE_READER; ?>
        </p>
        <p>
          → <a target="_blank" href="https://www.avast.com/es-ww/index">Avast!</a>, <?php echo DESCRIPCIO_AVAST; ?>
        </p>
        <p>
          → <a target="_blank" href="https://get.adobe.com/es/flashplayer/">Adobe Flash</a>, 
            <?php echo DESCRIPCIO_FLASH; ?>
        </p>
        <p>
          → <a target="_blank" href="https://www.mozilla.org/es-ES/firefox/">Firefox</a>,
            <?php echo DESCRIPCIO_MOZILLA; ?>
        </p>
        <p>
          → <a target="_blank" href="https://www.openoffice.org/es/descargar/">OppenOffice</a>,
            <?php echo DESCRIPCIO_OPPEN_OFFICE; ?>
        </p>
        <p>
          → <a target="_blank" href="https://www.techsmith.com/screen-capture.html">SnagIt</a>, 
            <?php echo DESCRIPCIO_SNAGIT; ?>
        </p>
        <p>
          →<a target="_blank" href="https://www.spotify.com/es/">Spotify</a> - <?php echo DESCRIPCIO_SPOTY; ?>
        </p>
        <p>
          →<a target="_blank" href="https://www.avg.com/es-es/tuneup-utilities">
          TuneUp Utilities</a> - <?php echo DESCRIPCIO_TUNE_UP; ?>
        </p>
        <p>
          →<a target="_blank" href="http://www.videolan.org/vlc/">VLC Media Player</a> <?php echo DESCRIPCIO_VLC; ?>
        </p>
        <p>
          →<a target="_blank" href="http://www.divx.com/">Divx</a> <?php echo DESCRIPCIO_DIVX; ?>
        </p>
        <p>
          →<a target="_blank" href="http://www.winamp.com/">Winamp</a> <?php echo DESCRIPCIO_WINAMP; ?>
        </p>
        <p>
          →<a target="_blank" href="https://www.java.com/es/">Java</a> <?php echo DESCRIPCIO_JAVA; ?>
        </p>
        <p class="m-bottom-25">
                <?php echo DOWNLOADPEDIA; ?>
                <a  target="_blank" href="http://downloadpedia.org/free-windows-software/">Downloadpedia</a>
        </p>
      </div>
    </div>
  </div>

  <footer class="footer m-top-45">
    <div class="container-fluid">
      <div class="row m-top-15">
        <div class="col-md-3">
          <img src="webroot/img/logoepic2.png" class="img-responsive" alt="logo epic" />
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
            <img class="item" style="width:90px" src="webroot/img/grup_epic2.jpg" alt="epic" />
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
</body>


</html>
