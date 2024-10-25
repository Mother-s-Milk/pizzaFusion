<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;
    
    use app\libs\request\Request;
    use app\libs\response\Response;

    final class InicioController extends Controller {
        
        public function __construct () {
            parent::__construct ([
                "app/js/inicio/inicio.js"
            ]);
        }

        public function index(): void {
            $this->view = "inicio.php";
            require_once APP_TEMPLATE . "template.php";
        }
    }

?>