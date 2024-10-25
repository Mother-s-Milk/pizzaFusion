<?php

    namespace app\core\model\dao;

    use app\core\model\base\DAO;
    use app\core\model\base\InterfaceDAO;
    use app\core\model\base\InterfaceDTO;

    use app\core\model\dto\PizzaDTO;

    final class PizzaDAO extends DAO implements InterfaceDAO {

        public function __construct ($conn) {
            parent::__construct ($conn, "pizzas");
        }

        public function save (InterfaceDTO $object): void {
            $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :nombre, :descripcion, :estiloId, :precio, :imgPath)";
            $stmt = $this->conn->prepare($sql);
            $data = $object->toArray();
            unset($data["id"]);
            $stmt->execute($data);
        }

        public function update (InterfaceDTO $object): void {
        }

        public function delete ($id): void {
            $sql = "DELETE FROM {$this->table} WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                "id" => $id
            ]);
        }

        public function list (): array {
            $sql = "SELECT id, nombre, descripcion, estiloId, precio, imgPath FROM {$this->table}";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function filterById (int $estiloId): array {
            $sql = "SELECT * FROM {$this->table} WHERE estiloId = :estiloId";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['estiloId' => $estiloId]);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC); //Devolvemos las pizzas filtradas
        }
        
    }

?>