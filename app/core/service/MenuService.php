<?php

    namespace app\core\service;

    use app\core\model\dao\PizzaDAO;

    use app\core\service\base\Service;
    use app\libs\Connection\Connection;

    final class MenuService extends Service {

        public function __construct () {
            parent::__construct();
        }

        public function obtenerPizzas (): array {
            $conn = Connection::get();
            $dao = new PizzaDAO($conn);

            return $dao->list();
        }

    }

?>