import axios from 'axios';




import Lenis from "lenis";



window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let lenis;

export function initLenis() {

    if (lenis) return;

    lenis = new Lenis({

        duration: 1.2,

        smoothWheel: true

    });

    function raf(time) {

        lenis.raf(time);

        requestAnimationFrame(raf);

    }

    requestAnimationFrame(raf);

}




document.addEventListener("livewire:navigated", init);
// document.addEventListener("DOMContentLoaded", init);

function init() {
    initLenis();

}