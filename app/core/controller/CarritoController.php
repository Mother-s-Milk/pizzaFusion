<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;
    
    use app\libs\request\Request;
    use app\libs\response\Response;

    final class CarritoController extends Controller {
        
        public function __construct () {
            parent::__construct ([
                "app/js/carrito/carritoController.js",
                "app/js/carrito/carritoService.js"
            ]);
        }

        public function index(): void {
            $this->view = "carrito.php";
            require_once APP_TEMPLATE . "template.php";
        }
    }

?>