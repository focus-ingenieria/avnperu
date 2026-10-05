// header.js — Menú móvil y sombra del header al hacer scroll
document.addEventListener('DOMContentLoaded', function () {

    const header = document.getElementById('siteHeader');
    const toggle = document.getElementById('menuToggle');
    const nav    = document.getElementById('siteNav');

    if (!header || !toggle || !nav) return;

    // --- Abrir / cerrar menú móvil ---
    function abrirMenu() {
        nav.classList.add('is-open');
        toggle.classList.add('is-open');
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Cerrar menú');
    }

    function cerrarMenu() {
        nav.classList.remove('is-open');
        toggle.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Abrir menú');
    }

    toggle.addEventListener('click', function () {
        nav.classList.contains('is-open') ? cerrarMenu() : abrirMenu();
    });

    // Cerrar al tocar un enlace del menú
    nav.querySelectorAll('a').forEach(function (enlace) {
        enlace.addEventListener('click', cerrarMenu);
    });

    // Cerrar al tocar fuera del header
    document.addEventListener('click', function (e) {
        if (!header.contains(e.target)) cerrarMenu();
    });

    // Cerrar con la tecla Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') cerrarMenu();
    });

    // --- Header compacto al hacer scroll ---
    function alHacerScroll() {
        header.classList.toggle('is-scrolled', window.scrollY > 60);
    }
    window.addEventListener('scroll', alHacerScroll, { passive: true });
    alHacerScroll();
});