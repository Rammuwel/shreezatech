import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("livewire:navigated", initTestimonials);
document.addEventListener("DOMContentLoaded", initTestimonials);

function initTestimonials() {

    const slider = document.querySelector(".review-swiper");

    if (!slider) return;

    if (slider.swiper) {
        slider.swiper.destroy(true, true);
    }

   new Swiper(".review-swiper", {

    modules: [Navigation, Pagination, Autoplay],

    slidesPerView: 3,
    spaceBetween: 24,
    loop: true,
    speed: 800,

    navigation: {
        nextEl: ".review-next",
        prevEl: ".review-prev",
    },

    pagination: {
        el: ".review-pagination",
        clickable: true,
    },

    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },

});
}