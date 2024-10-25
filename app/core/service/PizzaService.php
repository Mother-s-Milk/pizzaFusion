<?php

    namespace app\core\service;

    use app\core\model\dao\PizzaDAO;
    use app\core\model\dto\PizzaDTO;

    use app\core\service\base\Service;
    use app\core\service\base\InterfaceService;

    use app\libs\connection\Connection;

    final class PizzaService extends Service implements InterfaceService {

        public function __construct () {
            parent::__construct();
        }

        public function save (array $object): void {
            $conn = Connection::get();
            $dao = new PizzaDAO($conn);
            $dao->save(new PizzaDTO($object));
        }

        public function update (array $object): void {
        }

        public function delete ($id): void {
        }

        public function list (): array {
            $conn = Connection::get();
            $dao = new PizzaDAO($conn);
            $pizzas = $dao->list();

            //var_dump($pizzas);
            return $pizzas;
        }

        public function filterById (int $id): array {
            $conn = Connection::get();
            $dao = new PizzaDAO($conn);
            $pizzas = $dao->filterById($id);
            
            return $pizzas;  //Llamamos al DAO para filtrar las pizzas por estilo
        }        

    }

?>