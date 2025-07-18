import "../styles/main.scss";
import AdaptiveDOM from "./utils/AdaptiveDOM";
// import { Header } from "./components/Header";

const initUIComponents = (): void => {
  // new Header();
  new AdaptiveDOM();

  //@ts-expect-error Swiper is declared globally
  new Swiper("#c-services-slider", {
    slidesPerView: 4,
    spaceBetween: 32,
    speed: 1100,
    pagination: {
      el: ".c-services__pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".c-services__navigation-button--next",
      prevEl: ".c-services__navigation-button--prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      576: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 32,
      },
    },
  });
};

document.addEventListener("DOMContentLoaded", (): void => {
  // new AdaptiveDOM();
  initUIComponents();
});
