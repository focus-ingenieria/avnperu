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

    // Header scroll effect
    const header = document.querySelector('.header');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 100) {
            header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
        }

        lastScroll = currentScroll;
    });

    // Form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Obtener valores del formulario
            const formData = new FormData(this);
            const name = formData.get('name');
            const phone = formData.get('phone');

            // Aquí normalmente enviarías los datos a un servidor
            console.log('Formulario enviado:', { name, phone });

            // Mostrar mensaje de éxito
            const modal = document.getElementById("successModal");
            modal.classList.add("show");

            // Resetear formulario
            this.reset();
        });
    }

    // POPUP DE CONFIRMACIÓN
    const modal = document.getElementById("successModal");
    const closeModal = document.getElementById("closeModal");

    if (modal && closeModal) {

        closeModal.addEventListener("click", () => {
            modal.classList.remove("show");
        });

        // Cerrar si hace clic fuera de la caja
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.remove("show");
            }
        });

    }

    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');
            this.classList.toggle('active');

            // Cambiar icono
            if (this.classList.contains('active')) {
                this.textContent = '✕';
            } else {
                this.textContent = '☰';
            }
        });
    }

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

// Función para formatear números de teléfono
function formatPhoneNumber(input) {
    // Eliminar todos los caracteres no numéricos
    let value = input.value.replace(/\D/g, '');

    // Formatear según la longitud
    if (value.length <= 3) {
        input.value = value;
    } else if (value.length <= 6) {
        input.value = value.slice(0, 3) + ' ' + value.slice(3);
    } else {
        input.value = value.slice(0, 3) + ' ' + value.slice(3, 6) + ' ' + value.slice(6, 9);
    }
}

// Aplicar formato a inputs de teléfono
document.querySelectorAll('input[type="tel"]').forEach(input => {
    input.addEventListener('input', function () {
        formatPhoneNumber(this);
    });
});