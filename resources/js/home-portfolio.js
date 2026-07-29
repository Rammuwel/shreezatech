
import Swiper from "swiper";
import { Navigation, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";

document.addEventListener("livewire:navigated", initPortfolio);

function initPortfolio() {

    
    const slider = document.querySelector(".portfolio-swiper");

    if (!slider) return;

    if (slider.swiper) {
        slider.swiper.destroy(true, true);
    }

    new Swiper(".portfolio-swiper", {

        modules: [Navigation, Autoplay],

        slidesPerView: 5,
        spaceBetween: 20,
        loop: true,

        navigation: {
            nextEl: ".portfolio-next",
            prevEl: ".portfolio-prev",
        },

        breakpoints: {
            320: { slidesPerView: 1 },
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 4 },
            1280: { slidesPerView: 5 },
        },

    });

}