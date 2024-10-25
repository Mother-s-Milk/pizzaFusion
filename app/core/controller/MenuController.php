<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;

    use app\core\service\MenuService;

    use app\libs\request\Request;
    use app\libs\response\Response;

    final class MenuController extends Controller {

        public function __construct () {
            parent::__construct ([
                "app/js/menu/menu.js",
                "app/js/menu/menuController.js",
                "app/js/menu/menuService.js"
            ]);
        }

        public function index (): void {
            //$service = new MenuService();
            //$data = $service->list();
            $this->view = "menu.php";
            require_once APP_TEMPLATE . "template.php";
        }

    }

?>