"use strict";
// import { tns } from "./node_modules/tiny-slider/src/tiny-slider"

// Slider
var slider = tns({
    container: '.client-slider',
    items: 6,
    slideBy: 'page',
    autoplay: true, 
    mouseDrag: true,
    controls: false,
    nav: false,
    // autoplayText: ["", ""]
    // autoplayButton: false
    autoplayButtonOutput: false,
    responsive: {
      100: {
        edgePadding: 0,
        gutter: 0,
        items: 2
      },
      300: {
        edgePadding: 0,
        gutter: 0,
        items: 3
      },
      640: {
        edgePadding: 0,
        gutter: 0,
        items: 4
      },
      900: {
        items: 5
      }
    }
});


var sliderScreenShots = tns({
    container: '.screenshots-slider',
    items: 4,
    slideBy: 'page',
    autoplay: true, 
    mouseDrag: true,
    controls: false,
    gutter: 0,
    nav: true,
    // autoplayText: ["", ""]
    // autoplayButton: false
    autoplayButtonOutput: false,
    navPosition: "bottom",
    responsive: {
      200: {
        edgePadding: 0,
        gutter: 0,
        items: 2
      },
        640: {
          edgePadding: 0,
          gutter: 0,
          items: 3
        },
        900: {
          items: 4
        }
      }
});


var sliderPosts = tns({
    container: '.posts-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true, 
    mouseDrag: true,
    controls: true,
    nav: false,
    autoplayButtonOutput: false,
    // autoplayText: ["", "❯"],
    // autoplayButton: false
    // controlsContainer: false,
    controlsText: ["", "❯"],
    prevButton: false,
    responsive: {
        640: {
          edgePadding: 0,
          gutter: 0,
          items: 2
        },
        900: {
          items: 3
        }
      }
});


let burger = document.querySelector('.burger');

burger.addEventListener('click', function(){
 document.querySelector('.main-nav').classList.toggle('show');
});