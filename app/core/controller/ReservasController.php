<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;
    
    use app\libs\request\Request;
    use app\libs\response\Response;

    final class ReservasController extends Controller {
        
        public function __construct () {
            parent::__construct ([
                "app/js/Reservas/ReservasController.js",
                "app/js/Reservas/ReservasService.js"
            ]);
        }

        public function index(): void {
            $this->view = "reservas.php";
            require_once APP_TEMPLATE . "template.php";
        }
    }

?>