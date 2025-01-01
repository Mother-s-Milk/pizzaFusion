<?php

    namespace app\core\model\dto;

    use app\core\model\base\InterfaceDTO;

    final class PizzaDTO implements InterfaceDTO {

        private $id, $nombre, $descripcion, $estiloId, $precio, $fechaAlta, $estado, $imgPath;

        public function __construct ($data = []) {
            $this->setId($data["id"] ?? 0);
            $this->setNombre($data["nombre"] ?? "");
            $this->setDescripcion($data["descripcion"] ?? "");
            $this->setEstiloId($data["estiloId"] ?? 0);
            $this->setPrecio($data["precio"] ?? 0);
            $this->setFechaAlta($data["fechaAlta"] ?? "");
            $this->setEstado($data["estado"] ?? 0);
            $this->setImgPath($data["imgPath"] ?? "");
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

        public function getEstiloId (): int {
            return $this->estiloId;
        }

        public function getPrecio (): float {
            return $this->precio;
        }
        
        public function getFechaAlta (): string {
            return $this->fechaAlta;
        }

        public function getEstado (): int {
            return $this->estado;
        }

        public function getImgPath (): string {
            return $this->imgPath;
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

        public function setEstiloId ($id): void {
            $this->estiloId = (is_integer($id) && $id > 0) ? $id : 0;
        }

        public function setPrecio ($precio): void {
            $this->precio = (is_numeric($precio) && $precio > 0) ? floatval($precio) : 0;
        }

        public function setFechaAlta ($fechaAlta): void {
            $this->fechaAlta = (is_string($fechaAlta) && strtotime($fechaAlta)) ? $fechaAlta : "";
        }

        public function setEstado ($estado): void {
            $this->estado = (is_integer($estado) && $estado > 0) ? $estado : 0;
        }

        public function setImgPath ($imgPath): void {
            $this->imgPath = (is_string($imgPath) && strlen(trim($imgPath)) <= 255) ? trim($imgPath) : "";
        }

        /*Otros métodos*/
        public function toArray (): array {
            return [
                "id" => $this->getId(),
                "nombre" => $this->getNombre(),
                "descripcion" => $this->getDescripcion(),
                "estiloId" => $this->getEstiloId(),
                "precio" => $this->getPrecio(),
                "fechaAlta" => $this->getFechaAlta(),
                "estado" => $this->getEstado(),
                "imgPath" => $this->getImgPath()
            ];
        }
    }

?>