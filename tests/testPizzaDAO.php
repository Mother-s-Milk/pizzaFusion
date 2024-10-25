<?php

    require_once "../app/config/DBConfig.php";
    require_once "../app/vendor/autoload.php";

    use app\libs\connection\Connection;
    
    use app\core\model\dao\PizzaDAO;
    use app\core\model\dto\PizzaDTO;

    try {
        $conexion = Connection::get();
        echo "Conexión establecida<br>";

        $pizza1 = [
            "id" => 0,
            "nombre" => "Pizza del Bosque",
            "descripcion" => "Champiñones, Espinacas, Queso de cabra, Aceitunas, Pesto",
            "estiloId" => 3,
            "precio" => 10100,
            "imgPath" => "app/img/pizza-card.jpeg"
        ];
            
        $pizza2 = [
            "id" => 0,
            "imgPath" => "app/img/pizza-card.jpeg",
            "nombre" => "Margarita",
            "descripcion" => "Tomate fresco, Mozzarella, Albahaca, Aceite de oliva",
            "estiloId" => 1,
            "precio" => 8400
        ];

        $pizza3 = [
            "id" => 0,
            "imgPath" => "app/img/pizza-card.jpeg",
            "nombre" => "Carnivora Suprema",
            "descripcion" => "Pepperoni, Jamón, Salchichón, Bacon, Queso",
            "estiloId" => 2,
            "precio" => 7800
        ];

        $pizza4 = [
            "id" => 0,
            "imgPath" => "app/img/pizza-card.jpeg",
            "nombre" => "Cuatro Quesos",
            "descripcion" => "Mozzarella, Queso azul, Parmesano, Ricotta, Queso de cabra",
            "estiloId" => 4,
            "precio" => 8850
        ];

        $pizza5 = [
            "id" => 0,
            "imgPath" => "app/img/pizza-card.jpeg",
            "nombre" => "Hawaiana Clásica",
            "descripcion" => "Salsa de tomate, Mozzarella, Jamón, Piña, Pimiento",
            "estiloId" => 1,
            "precio" => 8000
        ];

        $pizza6 = [
            "id" => 0,
            "imgPath" => "app/img/pizza-card.jpeg",
            "nombre" => "Veggie Delicia",
            "descripcion" => "Pimientos, Cebolla, Champiñones, Espinacas, Aceitunas",
            "estiloId" => 5,
            "precio" => 9450
        ];

        $pizza7 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Pepperoni Picante',
            "descripcion" => 'Salsa de tomate, Mozzarella, Pepperoni, Jalapeños',
            "estiloId" => 2,
            "precio" => 7550
        ];

        $pizza8 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Trufa y Champiñones',
            "descripcion" => 'Salsa de trufa, Champiñones, Mozzarella, Rúcula',
            "estiloId" => 3,
            "precio" => 10100
        ];

        $pizza9 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Capresse',
            "descripcion" => 'Mozzarella fresca, Tomate, Albahaca, Balsámico',
            "estiloId" => 4,
            "precio" => 8400
        ];

        $pizza10 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Barbacoa con Pollo',
            "descripcion" => 'Salsa barbacoa, Pollo a la parrilla, Cebolla roja, Mozzarella',
            "estiloId" => 2,
            "precio" => 7800
        ];

        $pizza11 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Rústica de Verduras',
            "descripcion" => 'Calabacín, Berenjena, Pimientos, Cebolla, Mozzarella',
            "estiloId" => 5,
            "precio" => 8850
        ];

        $pizza12 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Pesto y Espinacas',
            "descripcion" => 'Salsa de pesto, Espinacas, Mozzarella, Piñones',
            "estiloId" => 3,
            "precio" => 8000
        ];

        $pizza13 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Napolitana',
            "descripcion" => 'Salsa de tomate, Mozzarella, Anchoas, Orégano',
            "estiloId" => 1,
            "precio" => 9450
        ];

        $pizza14 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Salmón y Alcaparras',
            "descripcion" => 'Crema, Salmón ahumado, Alcaparras, Eneldo',
            "estiloId" => 4,
            "precio" => 7550
        ];

        $pizza15 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Meat Lovers',
            "descripcion" => 'Salchichón, Jamón, Pepperoni, Bacon, Queso',
            "estiloId" => 2,
            "precio" => 10100
        ];

        $pizza16 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Mediterránea',
            "descripcion" => 'Aceitunas, Tomates secos, Queso feta, Espinacas',
            "estiloId" => 5,
            "precio" => 8400
        ];

        $pizza17 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Diablo de Chorizo',
            "descripcion" => 'Salsa de tomate, Mozzarella, Chorizo, Jalapeños',
            "estiloId" => 2,
            "precio" => 7800
        ];

        $pizza18 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Pera y Gorgonzola',
            "descripcion" => 'Pera, Queso gorgonzola, Nueces, Miel',
            "estiloId" => 3,
            "precio" => 8850
        ];

        $pizza19 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Margherita con Burrata',
            "descripcion" => 'Salsa de tomate, Burrata, Albahaca, Aceite de oliva',
            "estiloId" => 4,
            "precio" => 8000
        ];

        $pizza20 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Veggie BBQ',
            "descripcion" => 'Salsa barbacoa, Pimientos, Cebolla, Maíz, Queso',
            "estiloId" => 5,
            "precio" => 9450
        ];

        $pizza21 = [
            "id" => 0,
            "imgPath" => 'app/img/pizza-card.jpeg',
            "nombre" => 'Capricho de Jamón Serrano',
            "descripcion" => 'Salsa de tomate, Mozzarella, Jamón serrano, Rúcula',
            "estiloId" => 1,
            "precio" => 7550
        ];

        $dao = new PizzaDAO($conexion);

        try {
            $dao->save(new PizzaDTO($pizza1));
            $dao->save(new PizzaDTO($pizza2));
            $dao->save(new PizzaDTO($pizza3));
            $dao->save(new PizzaDTO($pizza4));
            $dao->save(new PizzaDTO($pizza5));
            $dao->save(new PizzaDTO($pizza6));
            $dao->save(new PizzaDTO($pizza7));
            $dao->save(new PizzaDTO($pizza8));
            $dao->save(new PizzaDTO($pizza9));
            $dao->save(new PizzaDTO($pizza10));
            $dao->save(new PizzaDTO($pizza11));
            $dao->save(new PizzaDTO($pizza12));
            $dao->save(new PizzaDTO($pizza13));
            $dao->save(new PizzaDTO($pizza14));
            $dao->save(new PizzaDTO($pizza15));
            $dao->save(new PizzaDTO($pizza16));
            $dao->save(new PizzaDTO($pizza17));
            $dao->save(new PizzaDTO($pizza18));
            $dao->save(new PizzaDTO($pizza19));
            $dao->save(new PizzaDTO($pizza20));
            $dao->save(new PizzaDTO($pizza21));
        }
        catch (Exception $ex) {
            print_r($ex->getMessage());
        }
    }
    catch (PDOException $ex) {
        echo '<p>Error de conexión ' . $ex->getMessage() . '</p>';
    }

?>