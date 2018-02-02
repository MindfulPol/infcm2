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
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Infocam Consulting Informàtic - <?php echo SERVICIOS_LOWERCASE; ?></title>
  <meta name="description" content="mantenimiento informático con servicio técnico
  a domicilio, administración sistemas, redes, cableados estructurados, auditoría 
  seguridad informática para la protección de datos LOPD, reparación de todo tipo de impresoras, 
  diseño, páginas Web, correo electrónico, etc.">

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
            <a><img src="webroot/img/flag_ca.png"/></a>
            <a><img src="webroot/img/flag_esp.jpg"/></a>
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
                    <h4 class="title"><?php echo CUENTENOS_SU_PROYECTO; ?></h4>
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
  <div class="container text-justify serb">
    <div class="row m-top-45">
      <div class="col-md-12 text-center">
        <h1 class="main-paragraph">
            <?php echo COMPROMISO_SERVICIOS; ?>
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#soporte" aria-expanded="false" aria-controls="soporte">
                <?php echo SOPORTE_INFORMATICO; ?>
              </a>
            </h4>
          </div>
          <div id="soporte" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <?php echo SOPORTE_INFORMATICO_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#redes" aria-expanded="false" aria-controls="redes">
                <?php echo ADMINISTRACION_SISTEMAS; ?>
              </a>
            </h4>
          </div>
          <div id="redes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <?php echo ADMINISTRACION_SISTEMAS_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#lopd" aria-expanded="false" aria-controls="lopd">
                <?php echo DOCUMENTO_SEGURIDAD; ?>
              </a>
            </h4>
          </div>
          <div id="lopd" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <?php echo DOCUMENTO_SEGURIDAD_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#software" aria-expanded="false" aria-controls="software">
                <?php echo IMPLANTACION_SOFTWARE; ?>
              </a>
            </h4>
          </div>
          <div id="software" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
                <?php echo IMPLANTACION_SOFTWARE_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#alojamientos" aria-expanded="false" aria-controls="alojamientos">
                <?php echo ALOJAMIENTOS; ?>
              </a>
            </h4>
          </div>
          <div id="alojamientos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
                <?php echo ALOJAMIENTOS_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#hardware" aria-expanded="false" aria-controls="hardware">
                <?php echo VENTA_HARDWARE; ?>
              </a>
            </h4>
          </div>
          <div id="hardware" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-body">
                <?php echo VENTA_HARDWARE_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#cloud" aria-expanded="false" aria-controls="cloud">
                <?php echo SERVICIOS_CLOUD; ?>
              </a>
            </h4>
          </div>
          <div id="cloud" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="panel-body">
                <?php echo SERVICIOS_CLOUD_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingEight">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#recuperacio" aria-expanded="false" aria-controls="recuperacio">
                <?php echo TELEFONIA; ?>
              </a>
            </h4>
          </div>
          <div id="recuperacio" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
            <div class="panel-body">
                <?php echo TELEFONIA_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingNine">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#auditories" aria-expanded="false" aria-controls="auditories">
                <?php echo AUDITORIAS; ?>
              </a>
            </h4>
          </div>
          <div id="auditories" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
            <div class="panel-body">
                <?php echo AUDITORIAS_BODY; ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTen">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
              href="#telefonia" aria-expanded="false" aria-controls="telefonia">
                <?php echo RECUPERACION_DATOS; ?>
              </a>
            </h4>
          </div>
          <div id="telefonia" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
            <div class="panel-body">
                <?php echo RECUPERACION_DATOS_BODY; ?>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- new footer -->
  <footer class="footer m-top-300">
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
  <!-- Flecha Scroll (back-to-top{display:none} -> activamos con jQuery)-->
  <a id="back-to-top" href="#" class="back-to-top"></a>
</body>

</html>
