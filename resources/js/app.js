import '../css/app.scss';

const topScroll = document.querySelector('.scroll-top');

function scrollTop() {
    const scrollY = window.scrollY;
    if (scrollY > 100) {
        topScroll?.classList.add('activate');
    } else {
        topScroll?.classList.remove('activate');
    }
}

window.addEventListener('scroll', scrollTop);

document.addEventListener('DOMContentLoaded', scrollTop);