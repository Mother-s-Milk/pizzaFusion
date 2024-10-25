<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;
    
    use app\libs\request\Request;
    use app\libs\response\Response;

    final class NosotrosController extends Controller {
        
        public function __construct () {
            parent::__construct ([
                "app/js/nosotros/nosotrosController.js",
                "app/js/nosotros/nosotrosService.js"
            ]);
        }

        public function index(): void {
            $this->view = "nosotros.php";
            require_once APP_TEMPLATE . "template.php";
        }
    }

?>