lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'albumLabel': 'APS Machine Parts',
    'alwaysShowNavOnTouchDevices': true
});

var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    centeredSlides: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    speed: 600,
        parallax: true,
    spaceBetween: 30,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      // 1024: {
      //   slidesPerView: 4,
      //   spaceBetween: 40,
      // },
      // 768: {
      //   slidesPerView: 3,
      //   spaceBetween: 30,
      // },
      768: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      400: {
        slidesPerView: 1,
        spaceBetween: 0,
      }
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // js for services carousel
  var menu = ['Machine', 'Assembly', '3D Printing'];
    var service = new Swiper('.service-swiper', {
      pagination: {
        el: '.service-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menu[index]) + '</span>';
        },
      },
      // Navigation arrows
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
    });