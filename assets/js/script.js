'use strict';

/**
 * navbar toggle
 */

const header = document.querySelector('[data-header]');
const navToggleBtn = document.querySelector('[data-nav-toggle-btn]');

navToggleBtn.addEventListener('click', function () {
  header.classList.toggle('nav-active');
  this.classList.toggle('active');
});

/**
 * toggle the navbar when click any navbar link
 */

const navbarLinks = document.querySelectorAll('[data-nav-link]');

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener('click', function () {
    header.classList.toggle('nav-active');
    navToggleBtn.classList.toggle('active');
  });
}

/**
 * back to top & header
 */

const backTopBtn = document.querySelector('[data-back-to-top]');

window.addEventListener('scroll', function () {
  if (window.scrollY >= 100) {
    header.classList.add('active');
    backTopBtn.classList.add('active');
  } else {
    header.classList.remove('active');
    backTopBtn.classList.remove('active');
  }
});

const portfolioSlider = document.querySelector('.portfolio-slider');
const portfolioList = document.querySelector('.portfolio-list');
const portfolioSlides = document.querySelectorAll('.portfolio-slide');
const prevButton = document.querySelector('.prev-slide');
const nextButton = document.querySelector('.next-slide');

let currentIndex = 0;
const slideWidth = portfolioSlides[0].offsetWidth;

function updateSlider() {
  portfolioList.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % portfolioSlides.length;
  updateSlider();
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + portfolioSlides.length) % portfolioSlides.length;
  updateSlider();
}

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

// setInterval(nextSlide, 3000);

document.addEventListener('DOMContentLoaded', () => {
  const navToggleBtn = document.querySelector('[data-nav-toggle-btn]');
  const header = document.querySelector('[data-header]');

  if (navToggleBtn && header) {
    navToggleBtn.addEventListener('click', () => {
      header.classList.toggle('nav-active');
    });
  }

  // Close navbar when a link is clicked
  const navbarLinks = document.querySelectorAll('[data-nav-link]');
  navbarLinks.forEach((link) => {
    link.addEventListener('click', () => {
      header.classList.remove('nav-active');
      navToggleBtn.classList.remove('active');
    });
  });
});

window.addEventListener('load', () => {
  const images = document.querySelectorAll('img');
  images.forEach((img) => {
    img.onerror = () => {
      console.error(`Image failed to load: ${img.src}`);
    };
  });
});
