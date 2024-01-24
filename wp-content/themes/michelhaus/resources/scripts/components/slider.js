import Swiper from 'swiper';
import { Autoplay, EffectFade, Navigation, Pagination } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', function () {
  // Initialize Swiper

  var heroSlider = new Swiper('.hero-slider', {
    modules: [Navigation, Pagination, Autoplay, EffectFade],
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 4500,
    },
    speed: 3200,
  });

  var fullSlider = new Swiper('.fullslider', {
    modules: [Navigation, Pagination, Autoplay, EffectFade],
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: false,
    speed: 2200,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
