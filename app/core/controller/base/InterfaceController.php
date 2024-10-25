<?php

    namespace app\core\controller\base;

    use app\libs\request\Request;
    use app\libs\response\Response;

    interface InterfaceController {

        /*Invoca la vista principal del módulo.*/
        //public function index (): void;

        /*Gestiona los servicios correspondientes para el alta de una nueva entidad en el sistema.*/
        public function save (Request $request, Response $response): void;

        /*Gestiona los servicios correspondientes para la actualización de datos de una entidad existente en el sistema.*/
        public function update (): void;

        /*Gestiona los servicios correspondientes para la eliminación (física) de la entidad.*/
        public function delete (): void;
    }

?>