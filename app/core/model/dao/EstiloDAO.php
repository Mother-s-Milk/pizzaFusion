<?php

    namespace app\core\model\dao;

    use app\core\model\base\DAO;
    use app\core\model\base\InterfaceDAO;
    use app\core\model\base\InterfaceDTO;

    use app\core\model\dto\EstiloDTO;

    final class EstiloDAO extends DAO implements InterfaceDAO {

        public function __construct ($conn) {
            parent::__construct ($conn, "estilos");
        }

        public function save (InterfaceDTO $object): void {
            $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :nombre)";
            $stmt = $this->conn->prepare($sql);
            $data = $object->toArray();
            unset($data["id"]);
            $stmt->execute($data);
            $object->setId((int)$this->conn->lastInsertId());
        }

        public function update (InterfaceDTO $object): void {
            $sql = "UPDATE {$this->table} SET nombre = :nombre WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($object->toArray());
        }

        public function delete ($id): void {
            $sql = "DELETE FROM {$this->table} WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                "id" => $id
            ]);
        }

    }

?>