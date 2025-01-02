document.addEventListener('DOMContentLoaded', () => {
    const headerPrincipal = document.querySelector('.principal-header');
    const navContainer = document.querySelector('.navigation-container');

    function checkScrollAndAnimations () {
        const scrollPosition = window.scrollY;

        if (scrollPosition > 0) { //Cambia el valor según necesites
            headerPrincipal.classList.add('scrolled');
            navContainer.classList.add('scrolled');
        } else {
            headerPrincipal.classList.remove('scrolled');
            navContainer.classList.remove('scrolled');
        }

        const animationSections = document.querySelectorAll('.animation-section');
        animationSections.forEach(section => {
            const sectionPosition = section.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            if(sectionPosition < screenPosition) {
                section.classList.add('animation-section-visible');
            }
            else {
                section.classList.remove('animation-section-visible');
            }
        });
    }

    //Ejecutar la función cuando la página cargue
    window.addEventListener('load', checkScrollAndAnimations);
    //Ejecutar la función en cada evento de desplazamiento (scroll)
    window.addEventListener('scroll', checkScrollAndAnimations);

    //Obtener la URL actual
    let currentUrl = window.location.href;
    //Obtener todos los enlaces del nav
    let navLinks = document.querySelectorAll('.principal-nav a, .carrito a');
    
    //Recorrer todos los enlaces. Esto es para asignar la clase 'active' al link en el que se esté en tal momento.
    navLinks.forEach(link => {
        //Remover la clase 'active' de todos los <li>
        link.parentElement.classList.remove('active');
        //Comparar solo la parte final del href(después del dominio)
        let linkUrl = link.href.split('/').pop();
        let currentUrlPart = currentUrl.split('/').pop();
        //Comprobar si el href del enlace está en la URL actual
        if (linkUrl === currentUrlPart) {
            //Si coincide, añadir la clase 'active' al elemento <li> que contiene el enlace
            link.parentElement.classList.add('active');
        }
    });

    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    lazyImages.forEach(img => {
        img.src = img.dataset.src;
    });

    const btnMenu = document.getElementById("btn-menu-desplegable");
    const menuDesplegable = document.getElementById("menu-desplegable");
    let interruptor = false;
    /******************/
    /*Menú desplegable*/
    /******************/
    //Abrir menú
    btnMenu.onclick = () => {
        if (!interruptor) {
            menuDesplegable.classList.add("show-menu");
            document.body.classList.add("no-scroll");
            btnMenu.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        }
        else {
            closeMenu();
        }

        interruptor = !interruptor;
    };

    //Cerrar el menú al hacer clic en un enlace
    let menuLinks = document.querySelectorAll("#menu-desplegable .links-nav a");
    menuLinks.forEach(link => {
        link.onclick = closeMenu; //Usa la función de cerrar
    });

    function closeMenu () {
        menuDesplegable.classList.remove("show-menu");
        document.body.classList.remove("no-scroll");
        btnMenu.innerHTML = '<i class="fa-solid fa-bars"></i>';
        //interruptor = false;
    }
    
});