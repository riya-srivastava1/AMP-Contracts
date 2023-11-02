// const slider = document.querySelector('.clients .slider-wrapper');

// let isDown = false;
// let startX;
// let scrollLeft;

// slider.addEventListener('mousedown', (e) => {
//   isDown = true;
//   slider.classList.add('active');
//   startX = e.pageX - slider.offsetLeft;
//   scrollLeft = slider.scrollLeft;
// }, {passive: true});
// slider.addEventListener('mouseleave', () => {
//   isDown = false;
//   slider.classList.remove('active');
// }, {passive: true});
// slider.addEventListener('mouseup', () => {
//   isDown = false;
//   slider.classList.remove('active');
// },{passive: true});
// slider.addEventListener('mousemove', (e) => {
//   if(!isDown) return;
//   e.preventDefault();
//   const x = e.pageX - slider.offsetLeft;
//   const walk = (x - startX) * 1; //scroll-fast
//   slider.scrollLeft = scrollLeft - walk;

// }, {passive: true});



// // FUNCTIONALITY FOR AUTOPLAY
// let scrollingRight = true;
// let scrollAmount = 5;
// let isMouseInside = false;


// const container = document.querySelector('.clients .slider-wrapper');

// container.addEventListener("mouseenter", () => {
//   isMouseInside = true;
// });

// container.addEventListener("mouseleave", () => {
//   isMouseInside = false;
// });

// function scrollContainer() {

//   if(window.innerWidth < 576){
//     //change accordingly
//     scrollAmount = 5;
//   }
//   if (isMouseInside) {
//     return; // Stop scrolling if the mouse is inside
//   }

//   if (scrollingRight) {
//     container.scrollTo({
//       left: container.scrollLeft + scrollAmount,
//       behavior: "smooth"
//     });

//     if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 1) {
//       scrollingRight = false;

//     }
//   } else {
//     container.scrollTo({
//       left: container.scrollLeft - scrollAmount,
//       behavior: "smooth"
//     });

//     if (container.scrollLeft <= 0) {
//       scrollingRight = true;
//     }
//   }
// }

// // Call the scrollContainer function every second
// setInterval(scrollContainer, 50);





$(document).ready(function () {
  let owl = $('.owl-carousel.client');
  owl.owlCarousel({

    autoplay: true,
    autoplaySpeed: 5000,
    autoplayHoverPause: true,
    autoWidth: false,
    margin: 36,
    loop: true,
    dots: false,
    touchDrag: true,
    mouseDrag: true,

    responsive: {
      0: {
        items: 3
      },
      480: {
        items: 3,

      },
      768: {
        items: 6,

      },
      992: {
        items: 10,
      }
    },

  });




});


