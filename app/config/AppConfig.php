<?php
    #Aca defino constantes
    
    //URL base de la aplicación
    define ("APP_URL", "http://localhost/pizzaFusion/public/");

    //Ruta absoluta en el servidor donde está ubicada la aplicación
    define ("APP_URI", $_SERVER["DOCUMENT_ROOT"] . "/pizzaFusion/app/");

    //Ruta a los templates
    define ("APP_TEMPLATE", APP_URI . "resources/template/");

    //Ruta a las vistas
    define ("APP_VIEWS", APP_URI . "resources/views/");

    CONST APP_DEFAULT_CONTROLLER = "inicio";
    CONST APP_DEFAULT_ACTION = "index";

?>