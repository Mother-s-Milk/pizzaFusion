<div class="principal-header">
    <div class="navigation-container container">

        <button type="button" id="btn-menu-desplegable" class="btn-menu-desplegable" aria-controls="menu-desplegable" aria-label="Abrir menú de navegación"><i class="fa-solid fa-bars"></i></button>

        <div class="logo">
            <a href="inicio" title="Volver al inicio">
                <h1><span>Pizza</span><span>Fusión</span></h1>
            </a>
        </div>

        <nav class="principal-nav" aria-label="Navegación Principal">
            <ul>
                <li><a href="inicio" title="Ir al inicio">Inicio</a></li>
                <li><a href="menu" title="Explora nuestro menú">Menú</a></li>
                <li><a href="#promociones" title="Conoce nuestras promociones">Promociones</a></li>
                <li><a href="nosotros">Sobre Nosotros</a></li>
                <!-- <li><a href="galeria" title="Galería de imágenes">Galería</a></li> -->
                <!-- <li><a href="reservas" title="Haz tu reserva">Reservas</a></li> -->
                <li><a href="#contacto" title="Contáctanos">Contacto</a></li>
            </ul>
        </nav>
        
        <div class="carrito">
            <a href="carrito" title="Ver carrito de compras">
                <i class="fa-solid fa-shopping-cart"></i>
                <span id="cart-count">0</span>
            </a>
        </div>
        
        <!-- Menú mobile -->
        <nav id="menu-desplegable" class="container menu-desplegable" aria-label="Menú móvil" >
            <ul class="links-nav">
                <li class="active"><a href="<?php echo APP_URL; ?>?page=home" aria-current="page">Inicio</a></li>
                <li><a href="<?php echo APP_URL; ?>?page=menu" title="Explora nuestro menú">Menú</a></li>
                <li><a href="#" title="Conoce nuestras promociones">Promociones</a></li>
                <li><a href="<?php echo APP_URL; ?>?page=nosotros" title="Conoce más sobre nosotros">Sobre Nosotros</a></li>
                <li><a href="<?php echo APP_URL; ?>?page=galeria" title="Galería de imágenes">Galería</a></li>
                <li><a href="<?php echo APP_URL; ?>?page=reservas" title="Haz tu reserva">Reservas</a></li>
                <li><a href="#" title="Contáctanos">Contacto</a></li>
            </ul>
            <footer class="menu-desplegable-footer">
                <ul class="social-media-menu">
                    <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a></li>
                    <li><a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
                <p>PizzaFusión © Todos los derechos reservados</p>
            </footer>
        </nav>
    </div>
</div>