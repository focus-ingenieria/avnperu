// main.js - Funcionalidad principal AVN

document.addEventListener('DOMContentLoaded', function () {
    // FAQ Toggle functionality
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', function () {
            const faqItem = this.parentElement;
            const isActive = faqItem.classList.contains('active');

            // Cerrar todos los FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });

            // Si no estaba activo, abrir este
            if (!isActive) {
                faqItem.classList.add('active');
            }
        });
    });

    // Smooth scroll para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));

            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Animación de velocidades
    function animarVelocidades(contenedor) {

        const velocidades = contenedor.querySelectorAll(".plan-speed");

        velocidades.forEach(element => {

            const numero = parseInt(element.textContent);

            let actual = 0;

            const intervalo = setInterval(() => {

                actual += Math.ceil(numero / 40);

                if (actual >= numero) {
                    actual = numero;
                    clearInterval(intervalo);
                }

                element.innerHTML = `
                ${actual}
                <span>
                    Mbps
                    <small>de velocidad</small>
                </span>
            `;

            }, 25);

        });

    }

    // Animar la primera pestaña al cargar
    animarVelocidades(document.getElementById("tab-1"));

    // Lazy loading para imágenes
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });

    // Observar todas las imágenes con data-src
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });

    // BOTONERAS DE PLANES
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach(button => {
        button.addEventListener("click", () => {

            tabButtons.forEach(btn => btn.classList.remove("active"));
            tabContents.forEach(tab => tab.classList.remove("active"));

            button.classList.add("active");

            const id = button.dataset.tab;
            const pestaña = document.getElementById(id);

            pestaña.classList.add("active");

            // Reproducir la animación
            animarVelocidades(pestaña);

        });
    });
});
