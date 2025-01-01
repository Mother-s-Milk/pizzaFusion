<?php

    namespace app\core\service;

    use app\core\model\dao\EstiloDAO;
    use app\core\model\dto\EstiloDTO;

    use app\core\service\base\Service;
    use app\core\service\base\InterfaceService;
    
    use app\libs\connection\Connection;


    final class EstiloService extends Service implements InterfaceService {

        public function __construct () {
            parent::__construct();
        }

        public function save (array $object): void {
            $conn = Connection::get();
            $dao = new EstiloDAO($conn);
            $dao->save(new EstiloDTO($object));
        }

        public function load ($id): EstiloDTO {
            $conn = Connection::get();
            $dao = new EstiloDAO($conn);
            return $dao->load($id);
        }

        public function update (array $object): void {
            $conn = Connection::get();
            $dao = new EstiloDAO($conn);
            $dao->update(new EstiloDTO($object));
        }

        public function delete ($id):void {
            $conn = Connection::get();
            $dao = new EstiloDAO($conn);
            $dao->delete($id);
        }

        public function list (): array {
            $conn = Connection::get();
            $dao = new EstiloDAO($conn);
            return $dao->list();
        }
        
    }

?>