<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        //Incluir el contenido del archivo head.php
        //require_once APP_TEMPLATE . 'include/head.php';
        require_once "includes/head.php";
        foreach($this->scripts as $script){
            echo '<script defer type="text/javascript" src="' . $script . '"></script>';
        }
    ?>
</head>
<body>
    <header>
        <?php
            //Incluir la barra de navegación desde nav.php
            //require_once APP_TEMPLATE . 'include/nav.php';
            require_once "includes/nav.php";
        ?>
    </header>

    <main>
        <?php
            //Incluir el contenido dinámico de la página solicitada
            //require_once $view;
            require_once APP_VIEWS . $this->view;
        ?>
    </main>

    <footer>
        <?php
            //Incluir el pie de página desde footer.php
            //require_once APP_TEMPLATE . 'include/footer.php';
            require_once "includes/footer.php";
        ?>
    </footer>
</body>
</html>