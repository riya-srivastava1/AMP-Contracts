const navToggler = document.querySelector('.nav-toggler');
const nav = document.querySelector('.navbar-n-contact');
navToggler.addEventListener('click', (e) => {
    nav.classList.toggle('show');
});