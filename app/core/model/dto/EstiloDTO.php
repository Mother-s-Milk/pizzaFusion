<?php

    namespace app\core\model\dto;

    use app\core\model\base\InterfaceDTO;

    final class EstiloDTO implements InterfaceDTO {
        
        private $id, $nombre, $descripcion;

        public function __construct ($data = []) {
            $this->setId($data["id"] ?? 0);
            $this->setNombre($data["nombre"] ?? "");
            $this->setDescripcion($data["descripcion"] ?? "");
        }

        /*Getters*/
        public function getId (): int {
            return $this->id;
        }

        public function getNombre (): string {
            return $this->nombre;
        }

        public function getDescripcion (): string {
            return $this->descripcion;
        }

        /*Setters*/
        public function setId ($id): void {
            $this->id = (is_integer($id) && $id > 0) ? $id : 0;
        }

        public function setNombre ($nombre): void {
            $this->nombre = (is_string($nombre) && strlen(trim($nombre)) <= 45) ? trim($nombre) : "";
        }

        public function setDescripcion ($descripcion): void {
            $this->descripcion = (is_string($descripcion) && strlen(trim($descripcion)) <= 180) ? trim($descripcion) : "";
        }

        /*Otros métodos*/
        public function toArray (): array {
            return [
                "id" => $this->getId(),
                "nombre" => $this->getNombre(),
                "descripcion" => $this->getDescripcion()
            ];
        }
    }

?>