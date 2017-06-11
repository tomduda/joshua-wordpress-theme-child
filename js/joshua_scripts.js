
jQuery(document).ready(function($) {  

	/* Stick navigation to the top of the page */
	var stickyNavTop = $('.main-navigation').offset().top; 

	$(window).scroll(function(){  
		var scrollTop = $(window).scrollTop();  

		if (scrollTop > stickyNavTop) {   
			$('.main-navigation').addClass('sticky-header'); 
			$('.site-header').addClass('shifted');
		} else {  
			$('.main-navigation').removeClass('sticky-header');   
			$('.site-header').removeClass('shifted');
		}  

	});
        /* Scroll to specific section on front page */
$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: (target.offset().top - 85)
				}, 2000);
				return false;
			}
		}
	});
});
});



	
	jQuery(document).ready(function($){
		$(window).scroll(function(){
			var scroll_top = $(window).scrollTop();
			var position1 = $("#par-box1").position();
			var position2 = $("#par-box2").position();
			var position3 = $("#par-box3").position();
			var position4 = $("#par-box4").position();
			var position5 = $("section#meet").position();
			var position6 = $("section#testimonials").position();

		// handles the section introduction heading animation
			
		if(scroll_top > position1.top - 500){
			$("#par-box1 h2").removeClass("hide");			
		}
		 if(scroll_top > position2.top - 500){
			$("#par-box2 h2").removeClass("hide");
		}
		if(scroll_top > position3.top - 500){
			$("#par-box3 h2").removeClass("hide");
		}
		if(scroll_top > position4.top - 1000){
			$("#par-box4 h2").removeClass("hide");
		}
		// Handles the contents of the "About Me" section animation
		if(scroll_top > position5.top - 750){
			$(".about-tom-text-0").animate({opacity: 1
			}, 900);
			$(".about-tom-text-1").animate({opacity: 1
			    }, 1800);
			$(".about-tom-text-2").animate({opacity: 1
			    }, 2100);
		}
		// Handles the contents of the testimonial section boxes animation
		if(scroll_top > position6.top - 750){
			$(".testimonial-box-0").animate({opacity: 1
			}, 900);
			$(".testimonial-box-1").animate({opacity: 1
			    }, 1800);
			$(".testimonial-box-2").animate({opacity: 1
			    }, 2100);

	}

		

		// Fade in efffect for about-tom-text classes (Unfinished) 
		// if(scroll_top > position.top ){
			
		
		// 	$(".about-tom-text-0").removeClass('hide').delay(800).fadeIn('slow');
		// 	$(".about-tom-text-1").removeClass('hide').delay(800).fadeIn('slow');
		// 	$(".about-tom-text-2").removeClass('hide').delay(800).fadeIn('slow');
		// }

		
		});
	});

	// jQuery(document).ready(function($){
	// 	$('.main-navigation li a').click(function(){
	// 		$('this').removeClass('site-navigation');
	// 	})
	// });