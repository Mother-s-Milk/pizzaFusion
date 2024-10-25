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

        public function update (): void {
            echo 'CONTROLLER => UPDATE <br>';
        }

        public function delete (): void {
            echo 'CONTROLLER => DELETE <br>';
        }
    }

?>