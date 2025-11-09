const toggle = document.querySelector('.nav-toggle');
const menu = document.querySelector('.nav-menu');
toggle.addEventListener('click', () => {
    menu.classList.toggle('active');
    // elimino bottone e vedo menu a colonna (per piccoli schermi)
    toggle.remove()
});