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



  
