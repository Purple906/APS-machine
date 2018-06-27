lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'albumLabel': 'APS Machine Parts',
    'alwaysShowNavOnTouchDevices': true
})

var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    speed: 600,
        parallax: true,
    spaceBetween: 0,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })