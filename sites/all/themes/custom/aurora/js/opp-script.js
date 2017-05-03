$(document).ready(function() {
	$("header a").click(function(){			
		$("header h1").addClass("active");
		$("nav").addClass("active");
	})
	$(".btn-cerrar").click(function(){			
		$("header h1").removeClass("active");
		$("nav").removeClass("active");
	})

	/* Smooth scrolling para anclas */
	$('a.btn-interna').click(function(e) {
		e.preventDefault();
		var $link = $(this);
		var anchor = $link.attr('href');
		$('html, body').stop().animate({
			scrollTop: $(anchor).offset().top
		}, 1000);
	});

	$(window).scroll(function(){
		var posicion = $(window).scrollTop();
		if(posicion>=440){
			$('.menu-interna').addClass('fijo');
		}
		else{
			$('.menu-interna').removeClass('fijo');
		}
	});

	/* Tabla Muelles */
	$(".content-muelles:eq(0)").fadeIn().toggleClass("active");
	$(".btn-muelles a").click(function() {
		var indexTab = $(this).parent().index();

		$(".btn-muelles a").filter(".active").removeClass("active");
		$(this).toggleClass("active");

		$(".content-muelles").filter(".active").fadeOut().removeClass("active");
		$(".content-muelles:eq(" + indexTab + ")").fadeIn().toggleClass("active");
	})

	$(".content-q:eq(0)").fadeIn().toggleClass("active");
	$(".btn-q").click(function() {
		var indexTab = $(this).parent().index();

		$(".btn-q").filter(".active").removeClass("active");
		$(this).toggleClass("active");

		$(".content-q").filter(".active").fadeOut().removeClass("active");
		$(".content-q:eq(" + indexTab + ")").fadeIn().toggleClass("active");
	})

});




