import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { CountUp } from "countup.js";


gsap.registerPlugin(ScrollTrigger);



document.addEventListener("livewire:navigated", init);
// document.addEventListener("DOMContentLoaded", init);

function init() {

    // remove old triggers
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());


    // if (!document.querySelector(".hero")) return;

    initServices();

}


export function initServices() {

    const section = document.querySelector(".services");

    if (!section) return;

    //----------------------------------------
    // Header
    //----------------------------------------

    gsap.from(".services-header > *", {
        scrollTrigger: {
            trigger: ".services-header",
            start: "top 80%",
        },
        opacity: 0,
        y: 40,
        duration: 0.8,
        stagger: 0.15,
        ease: "power3.out"
    });

    //----------------------------------------
    // Cards
    //----------------------------------------

    gsap.from(".service-card", {
        scrollTrigger: {
            trigger: ".services-grid",
            start: "top 75%",
        },
        opacity: 0,
        y: 80,
        scale: 0.9,
        duration: 0.8,
        stagger: {
            amount: 0.6,
            grid: "auto",
            from: "start"
        },
        ease: "power3.out"
    });

    //----------------------------------------
    // Floating Icons
    //----------------------------------------

    gsap.to(".service-icon", {

        y: -8,
        repeat: -1,
        yoyo: true,
        duration: 2,
        ease: "sine.inOut"

    });

    //----------------------------------------
    // Mouse Tilt Effect
    //----------------------------------------

    document.querySelectorAll(".service-card").forEach(card => {

        card.addEventListener("mousemove", (e) => {

            const rect = card.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const rotateY = ((x / rect.width) - 0.5) * 12;
            const rotateX = ((y / rect.height) - 0.5) * -12;

            gsap.to(card, {
                rotationY: rotateY,
                rotationX: rotateX,
                transformPerspective: 1000,
                transformOrigin: "center",
                duration: 0.35,
                ease: "power2.out"
            });

        });

        card.addEventListener("mouseleave", () => {

            gsap.to(card, {
                rotationX: 0,
                rotationY: 0,
                duration: 0.5,
                ease: "power3.out"
            });

        });

    });

}