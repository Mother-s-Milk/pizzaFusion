<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;
    use app\core\controller\base\InterfaceController;

    use app\core\service\PizzaService;

    use app\libs\request\Request;
    use app\libs\response\Response;

    final class PizzaController extends Controller implements InterfaceController {

        public function __construct () {
            parent::__construct([]);
        }

        public function save (Request $request, Response $response): void {
            $service = new PizzaService();
            $service->save($request->getData());
            $response->setMessage("La pizza se registró correctamente.");
            $response->send();
        }

        public function update (): void {
            echo 'CONTROLLER => UPDATE <br>';
        }

        public function delete (): void {
            echo 'CONTROLLER => DELETE <br>';
        }

        public function list (): void {
            $service = new PizzaService();
            $pizzas = $service->list();

            header('Content-Type: application/json; charset=UTF-8');
            echo json_encode($pizzas); //Envía las pizzas como un JSON
        }

        public function filterById (Request $request, Response $response): void {
            $filter = $request->getId();  //Obtenemos el filtro
            $service = new PizzaService();
            $filteredPizzas = $service->filterById((int)$filter);
            //$response->setResult($filteredPizzas);  //Devolvemos las pizzas filtradas
            //$response->send();
            header('Content-Type: application/json; charset=UTF-8');
            echo json_encode($filteredPizzas); //Envía las pizzas como un JSON
        }        

    }

?>