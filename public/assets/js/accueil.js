var mySwiper = new Swiper('.swiper-container', {

    // Optional parameters

    direction: 'horizontal',

  loop: true,
    
  effect: 'slide',
	slidesPerView: 5,
	spaceBetween: 0,
	noSwiping: false,
	allowSlidePrev: false,
	allowSlideNext: false,
	speed: 600,
	autoplay: false,
	keyboard: false,
	breakpoints: {

		320: {
			slidesPerView: 1,
			noSwiping: true,
			allowSlidePrev: true,
			allowSlideNext: true,
			renderBullets: 4,
		},



		1024: {
			slidesPerView: 1,
			noSwiping: false,
			allowSlidePrev: false,
			allowSlideNext: false,
			renderBullets: null,
		}

	},

  

    // If we need pagination
	// breakpoints: {
	// 	1024: {
	// 		slidesPerView: 1,
	// 		noSwiping: false,
	// 		allowSlidePrev: false,
	// 		allowSlideNext: false,
	// 		pagination: {
	
	// 		el: '.swiper-pagination',
	// 		renderBullets: null,
	// 		},
			
	// 	}

	// }

})
  

const selectElement = function (element) {
  return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function () {
  body.classList.toggle('open');
});

//  function openSlideMenu() {
//     document.getElementById('side-menu').style.width = '50vw';
//   }

//   function closeSlideMenu() {
//     document.getElementById('side-menu').style.width = '0';
// 	}
	
// $(function () {
//   $(document).scroll(function () {
//     var $nav = $(".navbar-fixed-top");
//     $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
//   });
// });
