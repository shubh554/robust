// // scripts.js
// document.addEventListener('DOMContentLoaded', () => {
//     const sliderInner = document.querySelector('.slider-inner');
//     const images = document.querySelectorAll('.slider-inner .img-container');
//     const totalImages = images.length;
//     const visibleImages = 6;
//     const imageWidth = 100; // Adjust this based on your image width
  
//     let currentIndex = 0;
  
//     function cloneImages() {
//       for (let i = 0; i < totalImages; i++) {
//         const clone = images[i].cloneNode(true);
//         sliderInner.appendChild(clone);
//       }
//     }
  
//     function updateSliderPosition() {
//       currentIndex++;
//       if (currentIndex >= totalImages) {
//         sliderInner.style.transition = 'none';
//         sliderInner.style.transform = `translateX(0)`;
//         currentIndex = 0;
//         setTimeout(() => {
//           sliderInner.style.transition = 'transform 1s linear';
//           updateSliderPosition();
//         }, 20);
//       } else {
//         sliderInner.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
//         setTimeout(updateSliderPosition, 3000);
//       }
//     }
  
//     cloneImages();
//     updateSliderPosition();
//   });
  