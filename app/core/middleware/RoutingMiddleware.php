<?php

    namespace app\core\middleware;

    use app\core\middleware\base\Middleware;
    use app\core\middleware\base\MiddlewareInterface;
    
    use app\libs\request\Request;
    use app\libs\response\Response;

    final class RoutingMiddleware extends Middleware implements MiddlewareInterface {

        public function handler (Request $request, Response $response): void {

            $controllerName = 'app\\core\\controller\\' . ucfirst($request->getController()) . 'Controller';

            if (!class_exists($controllerName) || !method_exists($controllerName, $request->getAction())) {
                throw new \Exception("Controlador y/o acción incorrectos.");
            }

            $response->setController($request->getController());
            $response->setAction($request->getAction());

            call_user_func_array(
                array(new $controllerName, $request->getAction()),
                array($request, $response)
            );
        }

    }

?>