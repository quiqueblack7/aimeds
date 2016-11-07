
// ISOTOPE FILTER
jQuery(document).ready(function($){

  if ( $('.iso-box-wrapper').length > 0 ) {

      var $container  = $('.iso-box-wrapper'),
        $imgs     = $('.iso-box img');

      $container.imagesLoaded(function () {

        $container.isotope({
        layoutMode: 'fitRows',
        itemSelector: '.iso-box'
        });

        $imgs.on('load', function(){
          $container.isotope('reLayout');
        })

      });

      //filter items on button click

      $('.filter-wrapper li a').click(function(){

          var $this = $(this), filterValue = $this.attr('data-filter');

      $container.isotope({
        filter: filterValue,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
        }
      });

      // don't proceed if already selected

      if ( $this.hasClass('selected') ) {
        return false;
      }

      var filter_wrapper = $this.closest('.filter-wrapper');
      filter_wrapper.find('.selected').removeClass('selected');
      $this.addClass('selected');

        return false;
      });

  }

});


// PRELOADER JS
$(window).on('load', function(){
    $('.preloader').fadeOut(1000); // set duration in brackets
    var H = $("#trans").height();
    $("#edu").height(H+"px");
    $("#coop").height(H+"px");
});

$(window).resize(function(){
    var H = $("#trans").height();
    $("#edu").height(H+"px");
    $("#coop").height(H+"px");
});


// jQuery to collapse the navbar on scroll //
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});


/* HTML document is loaded. DOM is ready.
-------------------------------------------*/
$(function(){

  // ------- WOW ANIMATED ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();


  // HIDE MOBILE MENU AFTER CLIKING ON A LINK
  $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


  // NIVO LIGHTBOX
  $('.iso-box-section a').nivoLightbox({
        effect: 'fadeScale',
    });


  // HOME BACKGROUND SLIDESHOW
  $(function(){
    jQuery(document).ready(function() {
    $('#home').backstretch([
       "images/FotoCarrusel1.jpg",
       "images/FotoCarrusel2.jpg",
       "images/FotoCarrusel3.jpg",
     ],  {duration: 3500, fade: 1000});
    });
  })

});


// CAMBIO DE IMAGENES EVENTOS
$("#evAnt").click(function(){
  $("#ant1").removeClass("actANTPROX");
  $("#prox1").removeClass("actANTPROX");
  $("#prox2").removeClass("actANTPROX");
  $("#prox3").removeClass("actANTPROX");
  $("#prox4").removeClass("actANTPROX");
  $("#evImg").css("opacity","0");
  $("#btnReg").css("display","none");
  setTimeout(function(){ $("#evImg").attr("src","images/pasEve.jpg"); setTimeout(function(){ $("#evImg").css("opacity","1");  }, 900); }, 300);

});

$("#evPro").click(function(){
  $("#ant1").removeClass("actANTPROX");
  $("#prox1").removeClass("actANTPROX");
  $("#prox2").removeClass("actANTPROX");
  $("#prox3").removeClass("actANTPROX");
  $("#prox4").removeClass("actANTPROX");
  $("#evImg").css("opacity","0");
  $("#btnReg").css("display","none");
  setTimeout(function(){ $("#evImg").attr("src","images/proxEve.jpg"); setTimeout(function(){ $("#evImg").css("opacity","1");  }, 900); }, 300);

});


$("#ant1").click(function(){
  $("#evImg").css("opacity","0");
  $("#ant1").addClass("actANTPROX");
  $("#prox1").removeClass("actANTPROX");
  $("#prox2").removeClass("actANTPROX");
  $("#prox3").removeClass("actANTPROX");
  $("#prox4").removeClass("actANTPROX");
  $("#btnReg").css("display","none");
  $(".btnEv").html("Ver evento");
  setTimeout(function(){ $("#evImg").attr("src","images/ant1.jpg"); setTimeout(function(){ $("#evImg").css("opacity","1");  }, 900); }, 300);
 });


$("#prox1").click(function(){
  $("#prox1").addClass("actANTPROX");
  $("#ant1").removeClass("actANTPROX");
  $("#prox2").removeClass("actANTPROX");
  $("#prox3").removeClass("actANTPROX");
  $("#prox4").removeClass("actANTPROX");
  $("#evImg").css("opacity","0");
  $("#btnReg").css("display","inline");
  $(".btnEv").html("Ver evento");
  $("#btnReg").attr("href","eventos.php?Evento=Proximo_1");
  setTimeout(function(){ $("#evImg").attr("src","images/prox1.jpg"); setTimeout(function(){ $("#evImg").css("opacity","1");  }, 900); }, 300);


});

$("#prox2").click(function(){
  $("#prox2").addClass("actANTPROX");
  $("#ant1").removeClass("actANTPROX");
  $("#prox1").removeClass("actANTPROX");
  $("#prox4").removeClass("actANTPROX");
  $("#evImg").css("opacity","0");
  $("#btnReg").css("display","inline");
  $(".btnEv").html("Ver evento");
  $("#btnReg").attr("href","eventos.php?Evento=Proximo_2");
  setTimeout(function(){ $("#evImg").attr("src","images/PG1.jpg"); setTimeout(function(){ $("#evImg").css("opacity","1");  }, 900);}, 300);

});

$("#prox3").click(function(){
  $("#prox3").addClass("actANTPROX");
  $("#ant1").removeClass("actANTPROX");
  $("#prox1").removeClass("actANTPROX");
  $("#prox2").removeClass("actANTPROX");
  $("#prox4").removeClass("actANTPROX");
  $("#evImg").css("opacity","0");
  $("#btnReg").css("display","inline");
  $(".btnEv").html("En constucción");
  $("#btnReg").removeAttr("href");
  setTimeout(function(){ $("#evImg").attr("src","images/prox3.jpg"); setTimeout(function(){ $("#evImg").css("opacity","1");  }, 900); }, 300);

});

$("#prox4").click(function(){
  $("#prox4").addClass("actANTPROX");
  $("#ant1").removeClass("actANTPROX");
  $("#prox1").removeClass("actANTPROX");
  $("#prox2").removeClass("actANTPROX");
  $("#prox3").removeClass("actANTPROX");
  $("#evImg").css("opacity","0");
  $("#btnReg").css("display","inline");
  $(".btnEv").html("En constucción");
  $("#btnReg").removeAttr("href");
  setTimeout(function(){ $("#evImg").attr("src","images/prox4.jpg"); setTimeout(function(){ $("#evImg").css("opacity","1");  }, 900); }, 300);

});
