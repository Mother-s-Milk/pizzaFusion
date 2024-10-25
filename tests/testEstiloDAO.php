<?php

    // require_once "../app/config/DBConfig.php";
    // require_once "../app/vendor/autoload.php";

    // use app\libs\connection\Connection;
    
    // use app\core\model\dao\EstiloDAO;
    // use app\core\model\dto\EstiloDTO;

    // try {
    //     $conexion = Connection::get();
    //     echo "Conexión establecida<br>";

    //     $estilo1 = [
    //         "id" => 0,
    //         "nombre" => "Clasica"
    //     ];

    //     $estilo2 = [
    //         "id" => 0,
    //         "nombre" => "Carnivora"
    //     ];

    //     $estilo3 = [
    //         "id" => 0,
    //         "nombre" => "Gourmet"
    //     ];

    //     $estilo4 = [
    //         "id" => 0,
    //         "nombre" => "Blanca"
    //     ];

    //     $estilo5 = [
    //         "id" => 0,
    //         "nombre" => "Veggie"
    //     ];

    //     $dao = new EstiloDAO($conexion);

    //     try {
    //         $dao->save(new EstiloDTO($estilo1));
    //         $dao->save(new EstiloDTO($estilo2));
    //         $dao->save(new EstiloDTO($estilo3));
    //         $dao->save(new EstiloDTO($estilo4));
    //         $dao->save(new EstiloDTO($estilo5));
    //     }
    //     catch (Exception $ex) {
    //         print_r($ex->getMessage());
    //     }
    // }
    // catch (PDOException $ex) {
    //     echo '<p>Error de conexión ' . $ex->getMessage() . '</p>';
    // }

?>