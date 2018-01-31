$(document).ready(function() {
  // Section carousel
  $('#carousel-section').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      390: {
        items: 5
      },
      1000: {
        items: 8
      }
    }
  });
  // Carousel del footer
  $('#carousel-footer').owlCarousel({
    items: 1,
    loop: true,
    margin: 3,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    dots: false
  });
  // divs expandibles de servicios.html
  // $(".expand-info").click(function() {
  //   //mostrar contenido del servicio seleccionado
  //   mostrarServicio($(this).data('show'));
  // });
  // // abrir div de servicios.html según paranetro de la url
  var url = window.location.href;
  var site = url.split("/");
  // si estamos en la vista de servicios mostramos el div correspondiente
  if (site[site.length - 1].includes('servicios')) {
    if (window.location.hash) {
      //si contiene hash'#'->
      var nombreServicio = window.location.hash.substr(1);
      $('#'+nombreServicio).addClass('in');
    }
  } else if(site[site.length - 1].includes('index')) {
    // add sticky navbar
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > 111) {
        $('.navbar').addClass('sticky-nav');
        $('#back-to-top').fadeIn();
      } else {
        $('.navbar').removeClass('sticky-nav');
        $('#back-to-top').fadeOut();
      }
    });
    // scroll screen to target
    $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top - 100
        }, 1000);
      }
    });
    // hide things maybe worthless af
    $(window).scroll(function() {
      $('.hideme').each(function(i) {
        var element = $(this).offset().top + $(this).outerHeight();
        var screenHeight = $(window).scrollTop() + $(window).height();
        // si elemento es visibli mostrar-lo
        if (screenHeight > element) {
          $(this).animate({
            'opacity': '1'
          }, 666);
        }
      });
    });
  }
  // Amagar navbar responsive
  $(document).on('click', '.navbar-collapse.in', function(e) {
    if ($(e.target).is('a')) {
      $(this).collapse('hide');
    }
  });
  // si entramos a la web desde descargas en /empresa/contactos/servicios
  // mostramos elementos directamente sin necessidad d'scroll por parte del usuario
  if ($(window).scrollTop() > 271) {
    $('.hideme').each(function() {
      $(this).animate({
        'opacity': '1'
      }, 250);
    });
  }
  // añadir flecha back-to-top
  //flecha back-to-top
  $('#back-to-top').click(function(event) {
    event.preventDefault();
    $('html,body').animate({
      scrollTop: 0
    }, 950);
  });

});
// google maps
var map;
function initMap() {
  var posicionInfocam = {
    lat: 41.311203,
    lng: 1.358638
  };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: posicionInfocam
  });
  var marker = new google.maps.Marker({
    position: posicionInfocam,
    map: map,
    title: 'Les nostres oficines'
  });
  google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter(posicionInfocam);
  });
}
