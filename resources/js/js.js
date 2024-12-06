$(document).ready(function(){
	$('.btn-nav').on('click', function()
	{
		$('.menu').toggleClass('active');
		$('.btn-nav i').toggleClass('fa-bars-staggered fa-close');
	});

	$('.slider_banner .conteudo .itens').slick(
	{
  		infinite: true,
  		slidesToShow: 1,
  		slidesToScroll: 1,
  		dots: false,
  		autoplay: true,
  		autoplaySpeed: 5000,
  		arrows: true,
  		prevArrow: '<a class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></a>',
  		nextArrow: '<a class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></a>'
	});


	$('.nossos_produtos:not(.listagem) .conteudo .itens').slick({
	  dots: true,
	  arrows: false,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1160,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});

	
	$('.avaliacoes .conteudo .itens').slick(
	{
  		infinite: true,
  		slidesToShow: 1,
  		slidesToScroll: 1,
  		dots: false,
  		autoplay: true,
  		autoplaySpeed: 5000,
  		arrows: true,
  		prevArrow: '<a class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></a>',
  		nextArrow: '<a class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></a>'
	});


	$('.logos .conteudo .itens').slick({
	  dots: false,
	  arrows: true,
	  prevArrow: '<a class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></a>',
      nextArrow: '<a class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></a>',
	  autoplay: true,
	  autoplaySpeed: 5000,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	  ]
	});


	$('.servicos:not(.listagem) .conteudo .itens').slick({
	  dots: true,
	  arrows: false,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});

	$('.galeria_fotos:not(.listagem) .conteudo .itens').slick({
	  dots: true,
	  arrows: false,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});



	$('.contador .counter').counterUp({
		delay: 10,
    	time: 2000
	});

	$('.swipebox').swipebox();
	$('.swipebox-video').swipebox();

	function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LdpTn4qAAAAADwMGtH2ZDq_hsbJ8Z-CDVTH9Sv4', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
    }

});