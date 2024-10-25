<?php

    namespace app\core\model\dto;

    use app\core\model\base\InterfaceDTO;

    final class PizzaDTO implements InterfaceDTO {
        private $id, $nombre, $descripcion, $estiloId, $precio, $imgPath;

        public function __construct ($data = []) {
            $this->setId($data["id"] ?? 0);
            $this->setNombre($data["nombre"] ?? "");
            $this->setDescripcion($data["descripcion"] ?? "");
            $this->setEstiloId($data["estiloId"] ?? 0);
            $this->setPrecio($data["precio"] ?? 0);
            $this->setImgPath($data["imgPath"] ?? "");
        }

        /*********/
        /*Getters*/
        /*********/

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

        public function getImgPath (): string {
            return $this->imgPath;
        }

        /*********/
        /*Setters*/
        /*********/

        public function setId ($id): void {
            $this->id = (is_integer($id) && $id > 0) ? $id : 0;
        }

        public function setNombre ($nombre): void {
            $this->nombre = preg_match('/^[\p{L}\s]{1,45}$/u', $nombre) ? $nombre : "";
        }

        public function setDescripcion ($descripcion): void {
            $this->descripcion = preg_match('/^[\p{L}\p{N}\s,.\'-]{1,255}$/u', $descripcion) ? $descripcion : "";
        }

        public function setEstiloId ($id): void {
            $this->estiloId = (is_integer($id) && $id > 0) ? $id : 0;
        }

        public function setPrecio ($precio): void {
            $this->precio = (is_numeric($precio) && $precio > 0) ? floatval($precio) : 0;
        }

        public function setImgPath ($imgPath): void {
            $this->imgPath = preg_match('/^[\w\/\.-]{1,255}$/', $imgPath) ? $imgPath : "";
        }

        /*********/
        /*Métodos*/
        /*********/

        public function toArray (): array {
            return [
                "id" => $this->getId(),
                "nombre" => $this->getNombre(),
                "descripcion" => $this->getDescripcion(),
                "estiloId" => $this->getEstiloId(),
                "precio" => $this->getPrecio(),
                "imgPath" => $this->getImgPath()
            ];
        }
    }

?>