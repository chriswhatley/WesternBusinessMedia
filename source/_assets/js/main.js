// mouse icon onClick scrolls to anchored section 
$(document).ready(function($){	
	$('a.scroll-link').click(function(e){
		e.preventDefault();
		var id = $(this).attr('href');
		$('body,html').animate({
			scrollTop: $(id).offset().top
		}, 750);
	});	
});

// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from 'swiper';

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

var mySwiper = new Swiper('.swiper-journals', {
	loop: true,
	slidesPerView: 1,
	spaceBetween: 10,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

var mySwiper = new Swiper('.swiper-testimonials', {
	loop: true,
	slidesPerView: 1,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});