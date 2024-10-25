<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;
    
    use app\libs\request\Request;
    use app\libs\response\Response;

    final class GaleriaController extends Controller {
        
        public function __construct () {
            parent::__construct ([
                "app/js/galeria/galeriaController.js",
                "app/js/galeria/galeriaService.js"
            ]);
        }

        public function index(): void {
            $this->view = "galeria.php";
            require_once APP_TEMPLATE . "template.php";
        }
    }

?>