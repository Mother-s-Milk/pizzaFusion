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
            "nombre" => "Pizza del Bosque",
            "descripcion" => "Champiñones, Espinacas, Queso de cabra, Aceitunas, Pesto",
            "estiloId" => 3,
            "precio" => 10100,
            "imgPath" => "app/img/pizza-card.jpeg"
        ];
            
        $pizza2 = [
            "nombre" => "Margarita",
            "descripcion" => "Tomate fresco, Mozzarella, Albahaca, Aceite de oliva",
            "estiloId" => 1,
            "precio" => 8400,
            "imgPath" => "app/img/pizza-card.jpeg",
        ];

        $pizza3 = [
            "nombre" => "Carnivora Suprema",
            "descripcion" => "Pepperoni, Jamón, Salchichón, Bacon, Queso",
            "estiloId" => 2,
            "precio" => 7800,
            "imgPath" => "app/img/pizza-card.jpeg",
        ];

        $pizza4 = [
            "nombre" => "Cuatro Quesos",
            "descripcion" => "Mozzarella, Queso azul, Parmesano, Ricotta, Queso de cabra",
            "estiloId" => 4,
            "precio" => 8850,
            "imgPath" => "app/img/pizza-card.jpeg",
        ];

        $pizza5 = [
            "nombre" => "Hawaiana Clásica",
            "descripcion" => "Salsa de tomate, Mozzarella, Jamón, Piña, Pimiento",
            "estiloId" => 1,
            "precio" => 8000,
            "imgPath" => "app/img/pizza-card.jpeg",
        ];

        $pizza6 = [
            "nombre" => "Veggie Delicia",
            "descripcion" => "Pimientos, Cebolla, Champiñones, Espinacas, Aceitunas",
            "estiloId" => 5,
            "precio" => 9450,
            "imgPath" => "app/img/pizza-card.jpeg",
        ];

        $pizza7 = [
            "nombre" => 'Pepperoni Picante',
            "descripcion" => 'Salsa de tomate, Mozzarella, Pepperoni, Jalapeños',
            "estiloId" => 2,
            "precio" => 7550,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza8 = [
            "nombre" => 'Trufa y Champiñones',
            "descripcion" => 'Salsa de trufa, Champiñones, Mozzarella, Rúcula',
            "estiloId" => 3,
            "precio" => 10100,
            "imgPath" => 'app/img/pizza-card.jpeg',
        ];

        $pizza9 = [
            "nombre" => 'Capresse',
            "descripcion" => 'Mozzarella fresca, Tomate, Albahaca, Balsámico',
            "estiloId" => 4,
            "precio" => 8400,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza10 = [
            "nombre" => 'Barbacoa con Pollo',
            "descripcion" => 'Salsa barbacoa, Pollo a la parrilla, Cebolla roja, Mozzarella',
            "estiloId" => 2,
            "precio" => 7800,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza11 = [
            "nombre" => 'Rústica de Verduras',
            "descripcion" => 'Calabacín, Berenjena, Pimientos, Cebolla, Mozzarella',
            "estiloId" => 5,
            "precio" => 8850,
            "imgPath" => 'app/img/pizza-card.jpeg',
        ];

        $pizza12 = [
            "nombre" => 'Pesto y Espinacas',
            "descripcion" => 'Salsa de pesto, Espinacas, Mozzarella, Piñones',
            "estiloId" => 3,
            "precio" => 8000,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza13 = [
            "nombre" => 'Napolitana',
            "descripcion" => 'Salsa de tomate, Mozzarella, Anchoas, Orégano',
            "estiloId" => 1,
            "precio" => 9450,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza14 = [
            "nombre" => 'Salmón y Alcaparras',
            "descripcion" => 'Crema, Salmón ahumado, Alcaparras, Eneldo',
            "estiloId" => 4,
            "precio" => 7550,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza15 = [
            "nombre" => 'Meat Lovers',
            "descripcion" => 'Salchichón, Jamón, Pepperoni, Bacon, Queso',
            "estiloId" => 2,
            "precio" => 10100,
            "imgPath" => 'app/img/pizza-card.jpeg',
        ];

        $pizza16 = [
            "nombre" => 'Mediterránea',
            "descripcion" => 'Aceitunas, Tomates secos, Queso feta, Espinacas',
            "estiloId" => 5,
            "precio" => 8400,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza17 = [
            "nombre" => 'Diablo de Chorizo',
            "descripcion" => 'Salsa de tomate, Mozzarella, Chorizo, Jalapeños',
            "estiloId" => 2,
            "precio" => 7800,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza18 = [
            "nombre" => 'Pera y Gorgonzola',
            "descripcion" => 'Pera, Queso gorgonzola, Nueces, Miel',
            "estiloId" => 3,
            "precio" => 8850,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza19 = [
            "nombre" => 'Margherita con Burrata',
            "descripcion" => 'Salsa de tomate, Burrata, Albahaca, Aceite de oliva',
            "estiloId" => 4,
            "precio" => 8000,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza20 = [
            "nombre" => 'Veggie BBQ',
            "descripcion" => 'Salsa barbacoa, Pimientos, Cebolla, Maíz, Queso',
            "estiloId" => 5,
            "precio" => 9450,
            "imgPath" => 'app/img/pizza-card.jpeg'
        ];

        $pizza21 = [
            "nombre" => 'Capricho de Jamón Serrano',
            "descripcion" => 'Salsa de tomate, Mozzarella, Jamón serrano, Rúcula',
            "estiloId" => 1,
            "precio" => 7550,
            "imgPath" => 'app/img/pizza-card.jpeg'
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