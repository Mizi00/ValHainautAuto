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

//Fonction sidebar qui la fait apparaitre
const cross = document.getElementById('cross');
const sidebar = document.getElementById('sidebar-client');
const navBarButton = document.getElementById('button-sidebar');
const mask = document.getElementById('mask'); //constante du mask vue dans le composant sidebar

if (sidebar && navBarButton && mask && cross) {

    navBarButton.addEventListener('click', () => {
        sidebar.classList.add('show');
        mask.classList.toggle('show', sidebar.classList.contains('show')); //Vérifie si la sidebar est active alors le mask s'active
        document.body.style.overflow = "hidden";
    });
    mask.addEventListener('click', () => {
        sidebar.classList.remove('show');
        mask.classList.remove('show');
        document.body.style.overflow = "auto";
    });

    cross.addEventListener('click', () =>{
        sidebar.classList.remove('show');
        mask.classList.remove('show');
        document.body.style.overflow = "auto";
    });
}