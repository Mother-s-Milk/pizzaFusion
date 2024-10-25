<?php
//Incluimos el archivo de configuración
    //require_once '../app/config/AppConfig.php';

    //Función para renderizar la página con la plantilla
    /*function renderPage ($view) {
        require_once APP_TEMPLATE . 'template.php';
    }*/

    //Capturamos el segmento de la URL para determinar la página
    //$page = isset($_GET['page']) ? $_GET['page'] : 'home';

    //Enrutamiento básico basado en el valor de 'page'
    /*switch ($page) {
        case 'menu':
            renderPage(APP_VIEWS . 'menu.php');
            break;
        case 'nosotros':
            renderPage(APP_VIEWS . 'nosotros.php');
            break;
        case 'galeria':
            renderPage(APP_VIEWS . 'galeria.php');
            break;
        case 'reservas':
            renderPage(APP_VIEWS . 'reservas.php');
            break;
        case 'carrito':
            renderPage(APP_VIEWS . 'carrito.php');
            break;
        default:
            renderPage(APP_VIEWS . 'home.php');
            break;
    }*/