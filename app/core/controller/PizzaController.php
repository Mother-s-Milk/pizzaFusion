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

        public function load (Request $request, Response $response): void {
            $service = new PizzaService();
            $pizza = $service->load($request->getId());

            $response->setResult($pizza->toArray());
            $response->setMessage("La pizza se cargó correctamente");
            $response->send();
        }

        public function update (Request $request, Response $response): void {
            $data = $request->getData();

            $service = new PizzaService();
            $service->update($data);

            $response->setMessage("La pizza se actualizo correctamente.");
            $response->send();
        }

        public function delete (Request $request, Response $response): void {
            $service = new PizzaService();
            $service->delete($request->getId());
            $response->setMessage('Pizza eliminada correctamente.');
            $response->send();
        }

        public function list (Request $request, Response $response): void {
            $service = new PizzaService();
            $pizzas = $service->list();

            $response->setResult($pizzas);
            $response->send();
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