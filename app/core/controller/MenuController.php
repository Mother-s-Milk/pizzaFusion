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
            $this->view = "menu.php";
            require_once APP_TEMPLATE . "template.php";
        }

        public function obtenerPizzas (Request $request, Response $response): void {
            $service = new MenuService();
            $pizzas = $service->obtenerPizzas();

            $response->setResult($pizzas);
            $response->send();
        }

    }

?>