var mySwiper = new Swiper('.swiper-container', {

    // Optional parameters

    direction: 'horizontal',

    loop: true,

  

    // If we need pagination

    pagination: {

      el: '.swiper-pagination',

    },

})
  

const selectElement = function (element) {
  return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function () {
  body.classList.toggle('open');
});

 function openSlideMenu() {
    document.getElementById('side-menu').style.width = '50vw';
  }

  function closeSlideMenu() {
    document.getElementById('side-menu').style.width = '0';
}

/*** Slider ***/

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}

  
