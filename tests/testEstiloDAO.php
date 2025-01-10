<?php

    require_once "../app/config/DBConfig.php";
    require_once "../app/vendor/autoload.php";

    use app\libs\connection\Connection;
    
    use app\core\model\dao\EstiloDAO;
    use app\core\model\dto\EstiloDTO;

    try {
        $conexion = Connection::get();
        echo "Conexión establecida<br>";

        $estilo1 = [
            "id" => 0,
            "nombre" => "Clasica",
            "descripcion" => "Las tradicionales que nunca fallan, con combinaciones simples como muzzarella, napolitana o fugazza. ¡Perfectas para los amantes de lo clásico!"
        ];

        $estilo2 = [
            "id" => 0,
            "nombre" => "Carnivora",
            "descripcion" => "Cargadas de carnes deliciosas como pepperoni, panceta, jamón y salchichas. Una explosión de sabor para los fanáticos de la proteína."
        ];

        $estilo3 = [
            "id" => 0,
            "nombre" => "Gourmet",
            "descripcion" => "Pizzas exclusivas con ingredientes premium como quesos especiales, rúcula, jamón crudo y aceites infusionados. Para los paladares más exigentes."
        ];

        $estilo4 = [
            "id" => 0,
            "nombre" => "Blanca",
            "descripcion" => "Sin salsa de tomate, destacan por sus bases de queso, crema o aceites, combinadas con sabores suaves y refinados."
        ];

        $estilo5 = [
            "id" => 0,
            "nombre" => "Veggie",
            "descripcion" => "Ideales para quienes aman los vegetales, con toppings frescos como espinaca, champiñones, pimientos y más. Coloridas, saludables y sabrosas."
        ];

        $dao = new EstiloDAO($conexion);

        try {
            $dao->save(new EstiloDTO($estilo1));
            $dao->save(new EstiloDTO($estilo2));
            $dao->save(new EstiloDTO($estilo3));
            $dao->save(new EstiloDTO($estilo4));
            $dao->save(new EstiloDTO($estilo5));
        }
        catch (Exception $ex) {
            print_r($ex->getMessage());
        }
    }
    catch (PDOException $ex) {
        echo '<p>Error de conexión ' . $ex->getMessage() . '</p>';
    }

?>