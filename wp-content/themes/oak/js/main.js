console.clear();

let body = document.querySelector('body');

// Menu Button
let menuBtn = document.querySelector('.menu-btn');
let header = document.querySelector('header');

menuBtn.addEventListener('click', () => {
    header.classList.toggle('opened');
    body.classList.toggle('menu-opened');
});