
	AOS.init({
		disable: 'mobile'
	});
	
	$(document).ready(function(){
		resizeDiv();
		
		$('.toggle').on('click', function() {
			$('header.main').toggleClass('active')
		});
		$('.slider').owlCarousel({
			items:1,
			autoplay: true,
			nav: false,
			loop: true,
			dots: true,
		});
		
		$(function() {
		  $('header.main a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html, body').animate({
				  scrollTop: target.offset().top - 64
				}, 1000);
				return false;
			  }
			}
		  });
		});
	});
	
	window.onresize = function(event) {
		resizeDiv();
	}

	function resizeDiv() {
		vpw = $(window).width();
		vph = $(window).height();
		vps = vph - 163;
		$('.hero-section').css({'height': vph + 'px' });
		$('.section').css({'height': vph + 'px' });
		$('.slider-wrapper').css({'height': vph + 'px' });
		$('.page-content').css({'min-height': vps + 'px' });
	}
	
	$(window).scroll(function() {
		if ($('header.main').hasClass('active')) { 
			$('header.main').removeClass('active');
		}
		
		var mn = $("header.main");
		mns = "scrolled";
	
		if( $(this).scrollTop() > 0 ) {
			mn.addClass(mns);
		} else {
			mn.removeClass(mns);
		}

	});