<?php

    namespace app\core\controller;

    use app\core\controller\base\Controller;
    use app\core\controller\base\InterfaceController;

    use app\core\service\EstiloService;

    use app\libs\request\Request;
    use app\libs\response\Response;

    final class EstiloController extends Controller implements InterfaceController {

        public function  __construct () {
            parent::__construct([]);
        }

        public function save (Request $request, Response $response): void {
            $service = new EstiloService();
            $service->save($request->getData());
            $response->setMessage("El estilo se registró correctamente.");
            $response->send();
        }

        public function load (Request $request, Response $response): void {
            $service = new EstiloService();
            $estilo = $service->load($request->getId());

            $response->setResult($estilo->toArray());
            $response->setMessage("El estilo se cargó correctamente");
            $response->send();
        }

        public function update (Request $request, Response $response): void {
            $data = $request->getData();

            $service = new EstiloService();
            $service->update($data);

            $response->setMessage("El estilo se actualizo correctamente.");
            $response->send();
        }

        public function delete (Request $request, Response $response): void {
            $service = new EstiloService();
            $service->delete($request->getId());
            $response->setMessage('Estilo eliminado correctamente.');
            $response->send();
        }

        public function list(Request $request, Response $response): void {
            $service = new EstiloService();
            $data = $service->list();
        
            $response->setResult($data);
            $response->send();
        }
    }

?>