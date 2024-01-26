import '../css/app.scss'

// Fonction pour gérer l'événement de défilement
function handleScroll() {
    const header = document.querySelector('.header');
    const scrollY = window.scrollY;
  // Ajoute la classe "scrolled" lorsque le défilement dépasse 50 pixels
  if (scrollY > 50) {
    header.classList.add('scrolled');
} else {
    header.classList.remove('scrolled');
}
}

// Ajoute un écouteur d'événements pour le défilement
window.addEventListener('scroll', handleScroll);

const sidebar = document.getElementById('sidebar');
const navBarButton = document.getElementById('button-sidebar');
const mask = document.getElementById('mask'); //constante du mask vue dans le composant sidebar

if (sidebar && navBarButton && mask) {
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


}