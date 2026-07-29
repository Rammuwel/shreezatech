
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { CountUp } from "countup.js";
import Lenis from "lenis";

gsap.registerPlugin(ScrollTrigger);


document.addEventListener("livewire:navigated", init);
// document.addEventListener("DOMContentLoaded", init);

function init() {
  
     // remove old triggers
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());


    // if (!document.querySelector(".hero")) return;
   
    heroIntro();
    counters();
    floatingCards();
    mouseParallax();
    
    

}

export function heroIntro() {

    gsap.timeline({

        defaults: {

            duration: 0.6,

            ease: "power3.out"

        }

    })

    .from(".hero-badge", {

        opacity: 0,

        y: -30

    })

    .from(".hero-title", {

        opacity: 0,

        y: 60

    }, "-=.6")

    .from(".hero-description", {

        opacity: 0,

        y: 40

    }, "-=.7")

    .from(".hero-buttons", {

        opacity: 0,

        y: 40

    }, "-=.7")

    .from(".hero-stats > div", {

        opacity: 0,

        y: 40,

        stagger: .12

    }, "-=.5")

  

    .from(".hero-card", {

        opacity: 0,

        scale: .8,

        stagger: .2

    }, "-=.8");

}




gsap.to(".hero-orbit-1", {

    rotate: 360,

    repeat: -1,

    duration: 40,

    ease: "none"

});

gsap.to(".hero-orbit-2", {

    rotate: -360,

    repeat: -1,

    duration: 20,

    ease: "none"

});

export function mouseParallax() {

    const hero = document.querySelector(".hero");

    hero.addEventListener("mousemove", (e) => {

        const x = (e.clientX / window.innerWidth - .5) * 40;

        const y = (e.clientY / window.innerHeight - .5) * 40;

        gsap.to(".hero-logo", {

            x,

            y,

            duration: .8

        });

        gsap.to(".hero-card", {

            x: x * .4,

            y: y * .4,

            duration: 1

        });

    });

}



export function counters() {

    document.querySelectorAll(".counter").forEach((item) => {

  

        item.dataset.started = true;

        const count = new CountUp(item, item.dataset.count, {

            duration: 3,

            suffix: item.dataset.suffix || "+"

        });

        count.start();


    });

}




export function floatingCards() {

    gsap.utils.toArray(".hero-card").forEach((card, i) => {

        gsap.to(card, {

            y: -12,

            duration: 2 + Math.random(),

            repeat: -1,

            yoyo: true,

            delay: i * .2,

            ease: "sine.inOut"

        });

    });

}



