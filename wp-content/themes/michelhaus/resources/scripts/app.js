import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper';
import { Autoplay, EffectFade, Navigation, Pagination } from 'swiper/modules';
// import Slider from './components/slider.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  document.addEventListener('DOMContentLoaded', function () {
    // Initialize Swiper

    new Swiper('.hero-slider', {
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

    new Swiper('.fullslider', {
      modules: [Navigation, Pagination, Autoplay, EffectFade],
      slidesPerView: 1,
      loop: true,
      spaceBetween: 10,
      autoplay: false,
      speed: 2200,
      navigation: {
        nextEl: '.swiper-button-next',
        // prevEl: '.swiper-button-prev',
      },
    });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
